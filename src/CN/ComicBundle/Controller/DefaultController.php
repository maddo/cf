<?php

namespace CN\ComicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('CNComicBundle:Default:index.html.twig', array('name' => $name));
    }
}
