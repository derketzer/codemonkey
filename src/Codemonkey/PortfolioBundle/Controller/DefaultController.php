<?php

namespace Codemonkey\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $posts = $this->getDoctrine()
            ->getRepository('CodemonkeyPortfolioBundle:Post')
            ->findBy(array("published"=>1), array("date"=>"DESC"), 3, 0);

        $projects = $this->getDoctrine()
            ->getRepository('CodemonkeyPortfolioBundle:Project')
            ->findBy(array("published"=>1), array("deliveredDate"=>"DESC"), 10, 0);

        print_r($projects);

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

        return $this->render('CodemonkeyPortfolioBundle:Default:index.html.twig', array("posts"=>$posts, "projects"=>$projects, "lastfm"=>$lastfm));
    }

    public function aboutAction()
    {
        return $this->render('CodemonkeyPortfolioBundle:Default:about.html.twig');
    }
}
