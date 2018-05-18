<?php

namespace App\DataFixtures;

use App\Entity\Group;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class GroupFixtures extends Fixture
{
    /**
     * (@inheritdoc)
     */
    public function load(ObjectManager $manager)
    {
            // GROUP
            $grab = new Group('grab');
            $manager->persist($grab);

            $flip = new Group('flip');
            $manager->persist($flip);

            $slide = new Group('slide');
            $manager->persist($slide);

            $rotation = new Group('rotation');
            $manager->persist($rotation);

            $manager->flush();
    }
}