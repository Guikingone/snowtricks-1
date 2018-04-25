<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Comment
*/
class Class
{
	/**
    * @var \Ramsey\Uuid\UuidInterface
    */
	private $id;

	/**
	* @var date
	*/
	private $date;

    /**
    * @var text
    */
    private $text;

    /**
    * @var user
    */
    private $user;
     
    /**
    * @var trick
    */
    private $trick;

    /**
    * @return id
    */
	public function getId(): UuidInterface
	{
		return $this->id;
	}

	/**
    * @return date
    */
	public function getDate()
	{
		return $this->date;
	}

	/**
    * @return text
    */
	public function getText()
	{
		return $this->text;
	}

	/**
    * @return user
    */
	public function getUser()
	{
		return $this->user;
	}

	/**
    * @return trick
    */
	public function getTrick()
	{
		return $this->trick;
	}
 	
	/**
    * @return Comment constructor
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