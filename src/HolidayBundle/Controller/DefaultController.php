<?php

namespace HolidayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HolidayBundle:Default:index.html.twig');
    }
}
