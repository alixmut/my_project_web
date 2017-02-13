<?php

namespace GudetamaFranceBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * UploadSubtitle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VideoRepository")
 */

class Video
{

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     *
     */
    private $filename;

    /**
     * @ORM\Column(type="string")
     *
     */
    private $filenamedb;

    /**
     * @ORM\OneToMany(targetEntity="GudetamaFranceBundle\Entity\UploadSubtitle", mappedBy="video")
     */
    private $subtitles;

    /**
     * @ORM\Column(type="string")
     *
     */
    private $username;

    /**
     * @ORM\Column(type="string")
     *
     */
    private $idVideo;

    /**
     * @ORM\ManyToOne(targetEntity="GudetamaFranceBundle\Entity\Categorie", inversedBy="videos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;
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
     * Constructor
     */
    public function __construct()
    {
        $this->subtitles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return Video
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set filenamedb
     *
     * @param string $filenamedb
     *
     * @return Video
     */
    public function setFilenamedb($filenamedb)
    {
        $this->filenamedb = $filenamedb;

        return $this;
    }

    /**
     * Get filenamedb
     *
     * @return string
     */
    public function getFilenamedb()
    {
        return $this->filenamedb;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Video
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set idVideo
     *
     * @param string $idVideo
     *
     * @return Video
     */
    public function setIdVideo($idVideo)
    {
        $this->idVideo = $idVideo;

        return $this;
    }

    /**
     * Get idVideo
     *
     * @return string
     */
    public function getIdVideo()
    {
        return $this->idVideo;
    }

    /**
     * Add subtitle
     *
     * @param \GudetamaFranceBundle\Entity\UploadSubtitle $subtitle
     *
     * @return Video
     */
    public function addSubtitle(\GudetamaFranceBundle\Entity\UploadSubtitle $subtitle)
    {
        $this->subtitles[] = $subtitle;

        return $this;
    }

    /**
     * Remove subtitle
     *
     * @param \GudetamaFranceBundle\Entity\UploadSubtitle $subtitle
     */
    public function removeSubtitle(\GudetamaFranceBundle\Entity\UploadSubtitle $subtitle)
    {
        $this->subtitles->removeElement($subtitle);
    }

    /**
     * Get subtitles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubtitles()
    {
        return $this->subtitles;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Video
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Add categorie
     *
     * @param \GudetamaFranceBundle\Entity\Categorie $categorie
     *
     * @return Video
     */
    public function addCategorie(\GudetamaFranceBundle\Entity\Categorie $categorie)
    {
        $this->categorie[] = $categorie;

        return $this;
    }

    /**
     * Remove categorie
     *
     * @param \GudetamaFranceBundle\Entity\Categorie $categorie
     */
    public function removeCategorie(\GudetamaFranceBundle\Entity\Categorie $categorie)
    {
        $this->categorie->removeElement($categorie);
    }
}
