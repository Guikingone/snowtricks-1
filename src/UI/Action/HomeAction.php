<?php

namespace App\UI\Action;

use App\UI\Responder\HomeResponder;
use Symfony\Component\Routing\Annotation\Route;

/**
*  @Route(name="home", path="/")
*/
class HomeAction
{
	public function __invoke(HomeResponder $responder)
	{
		return $responder();
	}
}