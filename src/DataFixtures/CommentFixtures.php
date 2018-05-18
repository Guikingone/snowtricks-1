<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 17/05/18
 * Time: 18:23
 */

namespace App\DataFixtures;

use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CommentFixtures extends Fixture
{
    /**
     * (@inheritdoc)
     */
    public function load(ObjectManager $manager)
    {
        // COMMENT
        $comment1 = new Comment('commentaire super interessant', $user1, $backflip);
        $manager->persist($comment1);

        $comment2 = new Comment('Ce trick est fortement déconseillé au cas d\'hernie discale.',
            $user1, $fifty);
        $manager->persist($comment2);

        $comment3 = new Comment('Acrobatique, mortel et dangereux !', $user2, $frontflip);
        $manager->persist($comment3);

        $manager->flush();
    }
}
