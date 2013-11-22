<?php
/**
 * Created by PhpStorm.
 * User: derketzer
 * Date: 22.11.13
 * Time: 13:16
 */

namespace Codemonkey\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Entity
 */
class PostGallery {
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id_post", type="integer")
     */
    private $id_post;

    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id_media", type="integer")
     */
    private $id_media;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity="Image")
     * @ORM\JoinColumn(name="id_media", referencedColumnName="id")
     */
    private $image;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return PostGallery
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return PostGallery
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return PostGallery
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set image
     *
     * @param \Codemonkey\PortfolioBundle\Entity\Image $image
     * @return PostGallery
     */
    public function setImage(\Codemonkey\PortfolioBundle\Entity\Image $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \Codemonkey\PortfolioBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return PostGallery
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Set id_media
     *
     * @param integer $idMedia
     * @return PostGallery
     */
    public function setIdMedia($idMedia)
    {
        $this->id_media = $idMedia;
    
        return $this;
    }

    /**
     * Get id_media
     *
     * @return integer 
     */
    public function getIdMedia()
    {
        return $this->id_media;
    }

    /**
     * Set id_post
     *
     * @param integer $idPost
     * @return PostGallery
     */
    public function setIdPost($idPost)
    {
        $this->id_post = $idPost;
    
        return $this;
    }

    /**
     * Get id_post
     *
     * @return integer 
     */
    public function getIdPost()
    {
        return $this->id_post;
    }
}