<?php

namespace Codemonkey\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $posts = $this->getDoctrine()
            ->getRepository('CodemonkeyPortfolioBundle:Post')
            ->findBy(array(), array("date"=>"DESC"), 3, 0);

        return $this->render('CodemonkeyPortfolioBundle:Default:index.html.twig', array("posts"=>$posts));
    }

    public function aboutAction()
    {
        return $this->render('CodemonkeyPortfolioBundle:Default:about.html.twig');
    }
}
