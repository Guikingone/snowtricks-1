<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 01/05/18
 * Time: 19:53
 */

namespace App\DataFixtures;

use App\Entity\Photo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PhotoFixtures extends Fixture
{
    /**
     * (@inheritdoc)
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i<20; $i++) {

            // PHOTO
            $photo = new Photo($i.'backflip.jpeg',  'images/tricks/backflip.jpg',
                $i.'backflip');

            $manager->persist($photo);
        }

            $manager->flush();
    }
}
