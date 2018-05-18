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
        // PHOTO
        $photo1 = new Photo('backflip.jpeg',  'images/tricks/backflip.jpg',
            'backflip');

        // For exemple : $this->addReference('image_i', $photo1);
        $manager->persist($photo1);

        $photo2 = new Photo('backflip2.jpeg',  'images/tricks/backflip2.jpg',
            'backflip2');
        $manager->persist($photo2);

        $photo3 = new Photo('backflip3.jpeg',  'images/tricks/backflip3.jpg',
            'backflip2');
        $manager->persist($photo3);

        $photo4 = new Photo('backflip4.jpeg',  'images/tricks/backflip4.jpg',
            'backflip4');
        $manager->persist($photo4);

        $photo5 = new Photo('backflip5.jpeg',  'images/tricks/backflip5.jpg',
            'backflip5');
        $manager->persist($photo5);

        $photo6 = new Photo('backflip6.jpeg',  'images/tricks/backflip6.jpg',
            'backflip6');
        $manager->persist($photo6);

        $photo7 = new Photo('crippler1.jpeg',  'images/tricks/crippler1.jpg',
            'crippler1');
        $manager->persist($photo7);

        $photo8 = new Photo('crippler2.jpeg',  'images/tricks/crippler2.jpg',
            'crippler2');
        $manager->persist($photo8);

        $photo9 = new Photo('crippler3.jpeg',  'images/tricks/crippler3.jpg',
            'crippler3');
        $manager->persist($photo9);

        $photo10 = new Photo('frontflip1.jpeg',  'images/tricks/frontflip1.jpg',
            'frontflip1');
        $manager->persist($photo10);

        $photo11 = new Photo('frontflip2.jpeg',  'images/tricks/frontflip2.jpg',
            'frontflip2');
        $manager->persist($photo11);

        $photo12 = new Photo('50-50', 'images/tricks/50-50-1.jpg','50-50');
        $manager->persist($photo12);

        $photo13 = new Photo('50-50-bis', 'images/tricks/50-50-2.jpg', '50-50');
        $manager->persist($photo13);

            $manager->flush();
    }
}
