<?php

namespace mePanel\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('mePanelBaseBundle:Default:index.html.twig');
    }
}
