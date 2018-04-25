<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    * @var string
    */
    private $trick_group;

    /**
    * @var string
    */
    private $photo;

    /**
    * @var string
    */
    private $video;

    /**
    * @var string
    */
    private $trick_user;

    /**
    * @var datetime
    */
    private $datecreate;

    /**
    * @var datetime
    */
    private $dateupdate;

    /**
    * @return id
    */
    public function getId(): UuidInterface
    {
        return $this->id;
    }

    /**
    * @return trick_name
    */
    public function getTrick_name()
    {
        return $this->name;
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
        return $this->group;
    }

    /**
    * @return photo
    */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
    * @return video
    */
    public function getVideo()
    {
        return $this->video;
    }

    /**
    * @return trick_user
    */
    public function getTrick_user()
    {
        return $this->user;
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
    * Trick constructor
    */
    public function __construct()
    {
        $this->id = Uuid::uuid4();
    }

    /**
    * Trick update
    */
    public function update()
    {

    }
}