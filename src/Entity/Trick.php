<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Trick
{
    private $id;

    private $trick_name;

    private $description;

    private $trick_group;

    private $photo;

    private $video;

    private $trick_user;

    private $datecreate;

    private $dateupdate;

    public function getId()
    {
        return $this->id;
    }

    public function getTrick_name()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getTrick_group()
    {
        return $this->group;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function getVideo()
    {
        return $this->video;
    }

    public function getTrick_user()
    {
        return $this->user;
    }

    public function getDatecreate()
    {
        return $this->datecreate;
    }

    public function getDateupdate()
    {
        return $this->dateupdate;
    }

    public function __construct()
    {

    }

    public function update()
    {

    }
}