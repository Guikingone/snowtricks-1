<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

use Twig\Environment;


class HomeController
{
    /**
     * @Route("/")
     *
     * @param Environment $environment
     * @return Response
     */
    public function __invoke(Environment $environment)
    {
        return new Response(
            $environment->render('home.html.twig')
        );
    }
}