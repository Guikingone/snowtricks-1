<?php

namespace App\UI\Responder;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

/**
* 
*/
class HomeResponder
{
	private $twig;

	public function __construct(Environment $twig)
	{
		$this->twig = $twig;
	}

	public function __invoke()
	{
		return new Response(
			$this->twig->render('home.html.twig')
		);
	}
}