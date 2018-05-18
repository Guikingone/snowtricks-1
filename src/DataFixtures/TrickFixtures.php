<?php

namespace App\DataFixtures;

use App\Entity\Trick;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TrickFixtures extends Fixture
{
    /**
     * (@inheritdoc)
     */
    public function load(ObjectManager $manager)
    {
        //TRICK
        $backflip = new Trick('backflip', 'Flipping backwards (like a standing backflip) off of a jump',
            'flip','Paul', $photo1);
        $manager->persist($backflip);

        $crippler = new Trick('crippler', ' Bring your knees right up to your chest, grabbing your board to help keep your body tight. Continue looking over your front shoulder, pulling with your grabbing hand if you need some extra power',
            'flip','Mouloud', $photo8);
        $manager->persist($crippler);

        $frontflip = new Trick('frontflip', 'Flipping forward (like a standing frontflip) off of a jump.',
            'flip','John', $photo10);
        $manager->persist($frontflip);

        $fifty = new Trick('fifty-fifty', 'A slide in which a snowboarder rides straight along a rail or other obstacle.[1] This trick has its origin in skateboarding, where the trick is performed with both skateboard trucks grinding along a rail.',
            'slide', 'Eusebius', $photo13);
        $manager->persist($fifty);

            $manager->flush();
    }
}