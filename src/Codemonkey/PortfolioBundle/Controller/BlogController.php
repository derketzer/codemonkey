<?php
/**
 * Created by PhpStorm.
 * User: derketzer
 * Date: 22.11.13
 * Time: 12:23
 */

namespace Codemonkey\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;

class BlogController extends Controller{
    public function postsAction()
    {
        $posts = $this->getDoctrine()
            ->getRepository('CodemonkeyPortfolioBundle:Post')
            ->findBy(array("published"=>1), array("date"=>"DESC"), 10, 0);

        $lastfmUrl = "http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=der_ketzerd&api_key=fd881dc565d5719be0f39e92bd70235b&format=json&limit=5";
        $lastfmCacheFile = "/tmp/lastfm_cache.txt";

        $fs = new Filesystem();
        $lastfmResponse = "";

        if(!$fs->exists($lastfmCacheFile) || filectime($lastfmCacheFile) > time()+3600){
            $ch = curl_init($lastfmUrl);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $lastfmResponse = curl_exec($ch);
            curl_close($ch);
            $fs->dumpFile($lastfmCacheFile, $lastfmResponse);
        }else{
            $lastfmResponse = file_get_contents($lastfmCacheFile);
        }

        $lastfm = array();
        if($lastfmResponse != ""){
            $lastfmResponse = json_decode(str_replace("#text", "text", $lastfmResponse));

            foreach($lastfmResponse->recenttracks->track as $track){
                $lastfm[] = array("name"=>$track->artist->text." - ".$track->name, "url"=>$track->url);
            }
        }

        return $this->render('CodemonkeyPortfolioBundle:Default:posts.html.twig', array('lastfm' => $lastfm, 'posts' => $posts));
    }
} 