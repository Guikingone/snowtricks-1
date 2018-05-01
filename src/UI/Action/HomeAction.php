<?php

namespace App\UI\Action;

use App\Infra\Doctrine\Repository\TrickRepository;
use App\UI\Responder\HomeResponder;
use Symfony\Component\Routing\Annotation\Route;

/**
*  @Route(name="home", path="/")
*/
class HomeAction
{
    private $repository;

    public function __construct(TrickRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(HomeResponder $responder)
    {
        $tricks=$this->repository->getAllTricks();
	    return $responder($tricks);
	}
}