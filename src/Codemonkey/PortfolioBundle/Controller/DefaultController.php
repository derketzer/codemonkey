<?php

namespace Codemonkey\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CodemonkeyPortfolioBundle:Default:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('CodemonkeyPortfolioBundle:Default:about.html.twig');
    }
}
