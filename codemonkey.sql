/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 50612
 Source Host           : localhost
 Source Database       : codemonkey

 Target Server Type    : MySQL
 Target Server Version : 50612
 File Encoding         : utf-8

 Date: 11/17/2013 19:56:17 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `cm_media`
-- ----------------------------
DROP TABLE IF EXISTS `cm_media`;
CREATE TABLE `cm_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `cm_post`
-- ----------------------------
DROP TABLE IF EXISTS `cm_post`;
CREATE TABLE `cm_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_thumb` int(11) DEFAULT NULL,
  `id_media` int(11) DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `published` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_52D57E09FBB290EB` (`id_thumb`),
  KEY `IDX_52D57E0984A9E03C` (`id_media`),
  CONSTRAINT `FK_52D57E0984A9E03C` FOREIGN KEY (`id_media`) REFERENCES `cm_media` (`id`),
  CONSTRAINT `FK_52D57E09FBB290EB` FOREIGN KEY (`id_thumb`) REFERENCES `cm_media` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `cm_project`
-- ----------------------------
DROP TABLE IF EXISTS `cm_project`;
CREATE TABLE `cm_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_thumb` int(11) DEFAULT NULL,
  `id_media` int(11) DEFAULT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `shortDescription` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `deliveredDate` date NOT NULL,
  `published` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_4AAF5F0CFBB290EB` (`id_thumb`),
  KEY `IDX_4AAF5F0C84A9E03C` (`id_media`),
  CONSTRAINT `FK_4AAF5F0C84A9E03C` FOREIGN KEY (`id_media`) REFERENCES `cm_media` (`id`),
  CONSTRAINT `FK_4AAF5F0CFBB290EB` FOREIGN KEY (`id_thumb`) REFERENCES `cm_media` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

SET FOREIGN_KEY_CHECKS = 1;
