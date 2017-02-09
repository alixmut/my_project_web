<?php

namespace GudetamaFranceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Note
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GudetamaFranceBundle\Entity\NoteRepository")
 */
class Note
{
	/**
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
	
    /**
	* @ORM\ManyToOne(targetEntity="GudetamaFranceBundle\Entity\UploadSubtitle")
	* @ORM\JoinColumn(nullable=false)
	*/
    private $upload_subtitle;
	
    public function getUploadSubtitle()
    {
        return $this->upload_subtitle;
    }

    public function setUploadSubtitle($upload_subtitle)
    {
		$this->upload_subtitle = $upload_subtitle;

        return $this;
    }
	
	/**
	 * @ORM\Column(type="string")
	 */
	private $username;
	
	public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
		$this->username = $username;

        return $this;
    }
	
	/**
	 * @ORM\Column(type="integer")
	 */
	private $value;
	
	public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
		$this->value = $value;

        return $this;
    }
}
