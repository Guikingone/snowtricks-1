<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 01/05/18
 * Time: 19:53
 */

namespace App\DataFixtures;

use App\Entity\Trick;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TrickFixtures extends Fixtures
{
    public function load(ObjectManager $manager)
    {

    }

    $manager->flush();
}