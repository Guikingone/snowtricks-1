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
    * Photo constructor
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