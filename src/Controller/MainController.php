<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Messenger\MessageBusInterface;


class MainController extends AbstractController
{
    /**
     * @Route("", name="index")
     */
    public function index(Request $request): Response
    {
        return $this->render('main/index.html.twig');
    }

    /**
     * @Route("/draw/", name="dessin")
     */
    public function draw(Request $request): Response
    {
        return $this->render('main/draw.html.twig');
    }
}
