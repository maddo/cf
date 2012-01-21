<?php

namespace CN\ComicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ComicCollection
{
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $logo; // = db.LinkProperty()

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created; // = db.DateTimeProperty(auto_now_add=True)

    /**
     * @ORM\Column(type="string")
     */
    protected $name;
  
    /**
     * @ORM\OneToMany(targetEntity="CN\ComicBundle\Entity\ComicStrip", mappedBy="comicCollection")
     */
    protected $comicStrips;

    public function __construct()
    {
        $this->created = new DateTime("now");
    }


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
     * Set logo
     *
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set created
     *
     * @param datetime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return datetime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Add comicStrips
     *
     * @param CN\ComicBundle\Entity\ComicStrip $comicStrips
     */
    public function addComicStrip(\CN\ComicBundle\Entity\ComicStrip $comicStrips)
    {
        $this->comicStrips[] = $comicStrips;
    }

    /**
     * Get comicStrips
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getComicStrips()
    {
        return $this->comicStrips;
    }
}