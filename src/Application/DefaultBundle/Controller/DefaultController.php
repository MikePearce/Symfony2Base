<?php

namespace Application\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplicationDefaultBundle:Default:index.html.twig', array('name' => $name));
    }
}
