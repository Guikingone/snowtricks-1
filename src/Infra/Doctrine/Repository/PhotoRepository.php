<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 30/04/18
 * Time: 17:20
 */

namespace App\Infra\Doctrine\Repository;

use App\Entity\Photo;
use App\Entity\Trick;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class PhotoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Photo::class);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllPhotos()
    {
        return $this->createQueryBuilder('photos')
                    ->getQuery()
                    ->getResult();
    }
}