<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Validator\Constraints\DateTime;

/**
* Trick entity
*/
class Trick
{
    /**
    * @var \Ramsey\Uuid\UuidInterface
    */
    private $id;

    /**
    * @var string
    */
    private $trick_name;

    /**
    * @var string
    */
    private $description;

    /**
    * @var Group
    */
    private $trick_group;

    /**
    * @var Photo
    */
    private $photos;

    /**
    * @var Video
    */
    private $videos;

    /**
    * @var User
    */
    private $trick_user;

    /**
    * @var DateTime
    */
    private $datecreate;

    /**
    * @var DateTime
    */
    private $dateupdate;

    /**
     * Trick constructor
     */
    public function __construct($trick_name, $description, $trick_group, $trick_user,
                                $photos = null, $videos = null)
    {
        $this->id = Uuid::uuid4();
        $this->description = $description;
        $this->trick_group = $trick_group;
        $this->photos = $photos;
        $this->videos = $videos;
        $this->trick_user = $trick_user;
        $this->datecreate = time();
    }

    /**
    * @return \Ramsey\Uuid\UuidInterface
    */
    public function getId(): UuidInterface
    {
        $this->id = Uuid::uuid4();
    }

    /**
    * @return string
    */
    public function getTrick_name()
    {
        return $this->trick_name;
    }

    /**
    * @return string
    */
    public function getDescription()
    {
        return $this->description;
    }

    /**
    * @return string
    */
    public function getTrick_group()
    {
        return $this->trick_group;
    }

    /**
    * @return photo
    */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
    * @return video
    */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
    * @return string
    */
    public function getTrick_user()
    {
        return $this->trick_user;
    }

    /**
    * @return DateTime
    */
    public function getDatecreate()
    {
        return $this->datecreate = time();
    }

    /**
    * @return DateTime
    */
    public function getDateupdate()
    {
        return $this->dateupdate = time();
    }

    /**
    * Trick update
    */
    public function update()
    {

    }
}