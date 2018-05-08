<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
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
    public function __construct($trick_name, $description, $datecreate, $dateupdate, $photos = null,
                                $trick_user = null, $videos = null, $trick_group = null)
    {
        $this->id = Uuid::uuid4();
        $this->description = $description;
        $this->trick_group = $trick_group;
        $this->photos = $photos;
        $this->videos = $videos;
        $this->trick_user = $trick_user;
        $this->datecreate = $datecreate;
        $this->dateupdate = $dateupdate;
    }

    /**
    * @return id
    */
    public function getId(): UuidInterface
    {
        $this->id = Uuid::uuid4();
    }

    /**
    * @return trick_name
    */
    public function getTrick_name()
    {
        return $this->trick_name;
    }

    /**
    * @return description
    */
    public function getDescription()
    {
        return $this->description;
    }

    /**
    * @return trick_group
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
    * @return trick_user
    */
    public function getTrick_user()
    {
        return $this->trick_user;
    }

    /**
    * @return datecreate
    */
    public function getDatecreate()
    {
        return $this->datecreate;
    }

    /**
    * @return dateupdate
    */
    public function getDateupdate()
    {
        return $this->dateupdate;
    }

    /**
    * Trick update
    */
    public function update()
    {

    }
}