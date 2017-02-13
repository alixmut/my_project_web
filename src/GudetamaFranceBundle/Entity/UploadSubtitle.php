<?php

namespace GudetamaFranceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * UploadSubtitle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GudetamaFranceBundle\Entity\UploadSubtitleRepository")
 */
class UploadSubtitle
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
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Please, upload the subtitle file as a SRT file.")
     */
    private $filename;
	
    public function getFilename()
    {
        return $this->filename;
    }

    public function setFilename($filename)
    {
		$this->filename = $filename;

        return $this;
    }
	
	/**
	 * @ORM\Column(type="string")
	 */
	private $filenamedb;
	
	public function getFilenamedb()
    {
        return $this->filenamedb;
    }

    public function setFilenamedb($filenamedb)
    {
		$this->filenamedb = $filenamedb;

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
	* @ORM\ManyToOne(targetEntity="GudetamaFranceBundle\Entity\Video", inversedBy="subtitles")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $video;
	
	public function getVideo()
    {
        return $this->video;
    }

    public function setVideo($video)
    {
		$this->video = $video;

        return $this;
    }
	
	/**
	* @ORM\OneToMany(targetEntity="GudetamaFranceBundle\Entity\Note", mappedBy="uploadsubtitle")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $note;
	
	public function getNote()
    {
        return $this->note;
    }

    public function setNote($note)
    {
		$this->note = $note;

        return $this;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->note = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add note
     *
     * @param \GudetamaFranceBundle\Entity\Note $note
     *
     * @return UploadSubtitle
     */
    public function addNote(\GudetamaFranceBundle\Entity\Note $note)
    {
        $this->note[] = $note;
    
        return $this;
    }

    /**
     * Remove note
     *
     * @param \GudetamaFranceBundle\Entity\Note $note
     */
    public function removeNote(\GudetamaFranceBundle\Entity\Note $note)
    {
        $this->note->removeElement($note);
    }
}
