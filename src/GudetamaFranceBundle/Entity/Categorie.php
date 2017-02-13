<?php

namespace GudetamaFranceBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * UploadSubtitle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CategorieRepository")
 */

class Categorie
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
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="GudetamaFranceBundle\Entity\Video", mappedBy="categorie")
     */
    private $videos;

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
     * Set name
     *
     * @param string $name
     *
     * @return Categorie
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set video
     *
     * @param \GudetamaFranceBundle\Entity\Video $video
     *
     * @return Categorie
     */
    public function setVideo(\GudetamaFranceBundle\Entity\Video $video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return \GudetamaFranceBundle\Entity\Video
     */
    public function getVideo()
    {
        return $this->video;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->videos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add video
     *
     * @param \GudetamaFranceBundle\Entity\Video $video
     *
     * @return Categorie
     */
    public function addVideo(\GudetamaFranceBundle\Entity\Video $video)
    {
        $this->videos[] = $video;

        return $this;
    }

    /**
     * Remove video
     *
     * @param \GudetamaFranceBundle\Entity\Video $video
     */
    public function removeVideo(\GudetamaFranceBundle\Entity\Video $video)
    {
        $this->videos->removeElement($video);
    }

    /**
     * Get videos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVideos()
    {
        return $this->videos;
    }
}
