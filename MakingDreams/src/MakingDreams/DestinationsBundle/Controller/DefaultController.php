<?php

namespace MakingDreams\DestinationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function showViewAction()
    {
        return $this->render('DestinationsBundle:Default:destination.html.twig');
    }
}
