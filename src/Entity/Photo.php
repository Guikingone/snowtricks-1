<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Photo entity
*/
class Photo
{
	/**
    * @var \Ramsey\Uuid\UuidInterface
    */
	private $id;

	/**
    * @var string
    */
	private $title;

	/**
    * @var string
    */
	private $path;

    /**
     * @var string
     */
	private $trick_photo;

    /**
     * @return UuidInterface
     */
	public function getId(): UuidInterface
	{
		return $this->id;
	}

    /**
     * @return string
     */
	public function getTitle()
	{
		return $this->title;
	}

    /**
     * @return string
     */
	public function getPath()
	{
		return $this->path;
	}

    /**
     * @return string
     */
    public function getTrickPhoto()
    {
        return $this->trick_photo;
    }

    /**
     * Photo constructor.
     */
	function __construct()
	{
		$this->id = Uuid::uuid4();		
	}

	/**
    * Photo update
    */
	public function update()
	{

	}
}