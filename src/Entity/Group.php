<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Snowtricks_group
*/
class Group
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
     * @var string
     */
	private $tricks;

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
	public function getName()
	{
		return $this->name;
	}

    /**
     * @return string
     */
    public function getTricks()
    {
        return $this->tricks;
    }

	/**
	* @return Group constructor
	*/
	public function __construct()
	{
		$this->id = Uuid::uuid4();
	}

	/**
	* Group update
	*/
	public function update()
	{
		
	}
}