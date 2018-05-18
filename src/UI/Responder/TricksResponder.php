<?php

namespace App\UI\Responder;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class TricksResponder
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke($tricks)
    {
        return new Response(
            $this->twig->render('tricks.html.twig', [
                'tricks' => $tricks
            ])
        );
    }
}