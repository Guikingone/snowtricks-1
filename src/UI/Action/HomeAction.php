<?php

namespace App\UI\Action;

use App\Infra\Doctrine\Repository\PhotoRepository;
use App\UI\Responder\HomeResponder;
use Symfony\Component\Routing\Annotation\Route;

/**
*  @Route(name="home", path="/")
*/
class HomeAction
{
    private $repository;

    public function __construct(PhotoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(HomeResponder $responder)
    {
        $photos=$this->repository->getAllPhotos();
	    return $responder($photos);
	}
}
