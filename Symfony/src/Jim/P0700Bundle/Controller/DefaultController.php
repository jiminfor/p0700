<?php

namespace Jim\P0700Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JimP0700Bundle:Default:index.html.twig');
    }
}
