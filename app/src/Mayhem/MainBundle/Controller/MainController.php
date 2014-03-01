<?php

namespace Mayhem\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('MayhemMainBundle::layout.html.twig');
    }
}