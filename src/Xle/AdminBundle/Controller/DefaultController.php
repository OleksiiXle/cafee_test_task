<?php

namespace Xle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@XleAdmin/Default/index.html.twig');
    }
}
