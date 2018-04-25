<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Snowtricks_user entity
*/
class User
{
    /**
    * @var \Ramsey\Uuid\UuidInterface
    */
	private $id;

	/**
    * @var string
    */
	private $name;

	/**
    * @var photo
    */
	private $photo;

	/**
    * @var nick
    */
	private $nick;

	/**
    * @var password
    */
	private $password;

	/**
    * @var email
    */
	private $email;

	/**
	* @var trick
	*/
	private $trick; 

	/**
	* boolean
	*/
	private $status;

	/**
	* role (array)
	*/
	private $role;

	/**
    * @return id
    */
	public function getId(): UuidInterface
	{
		return $this->id;
	}

	/**
    * @return name
    */
	public function getName()
	{
		return $this->name;
	}

	/**
    * @return photo
    */
	public function getPhoto()
	{
		return $this->photo;
	}

	/**
    * @return nick
    */
	public function getNick()
	{
		return $this->nick;
	}

	/**
    * @return photo
    */
	public function getPassword()
	{
		return $this->photo;
	}

	/**
    * @return email
    */
	public function getEmail()
	{
		return $this->email;
	}

    /**
    * @return trick
    */
    public function getTrick()
    {
    	return $this->trick;
    }

	/**
    * @return status
    */
	public function getStatus()
	{
		return $this->status;
	}

	/**
    * @return role
    */
	public function getRole()
	{
		return $this->role;
	}

	/**
    * @return User constructor
    */
    public function __construct()
    {
        $this->id = Uuid::uuid4();
    }

    /**
    * User validate
    */
    public function validate()
    {

    }

    /**
    * User update
    */
    public function update()
    {
    	
    }
}