<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Video entity
*/
class Video
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
    * @return id
    */
	public function getId(): UuidInterface
	{
		return $this->id;
	}

	/**
    * @return title
    */
	public function getTitle()
	{
		return $this->title;
	}

	/**
    * @return path
    */
	public function getPath()
	{
		return $this->path;
	}

	/**
    * Video constructor
    */	
	function __construct()
	{
		$this->id = Uuid::uuid4();		
	}

	/**
    * Video update
    */
	public function update()
	{

	}
	
}