<?php

namespace App\UI\Action;

use App\Infra\Doctrine\Repository\TricksRepository;
use App\UI\Responder\TricksResponder;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(name="tricks", path="/tricks")
 */

class TricksAction
{
    private $repository;

    public function __construct(TricksRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(TricksResponder $responder)
    {
        $tricks=$this->repository->getAllTricks();
        return $responder($tricks);
    }
}