<?php

namespace CN\ComicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ComicStrip
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
    protected $imageUrl;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created; // = db.DateTimeProperty(auto_now_add=True)

    /**
     * @ORM\Column(type="integer")
     */
    protected $order;
  
    /**
     * @ORM\ManyToOne(targetEntity="CN\ComicBundle\Entity\ComicCollection", inversedBy="comicStrips")
     */
    protected $comicCollection;

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
     * Set imageUrl
     *
     * @param string $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * Get imageUrl
     *
     * @return string 
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
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
     * Set order
     *
     * @param integer $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * Get order
     *
     * @return integer 
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set comicCollection
     *
     * @param CN\ComicBundle\Entity\ComicCollection $comicCollection
     */
    public function setComicCollection(\CN\ComicBundle\Entity\ComicCollection $comicCollection)
    {
        $this->comicCollection = $comicCollection;
    }

    /**
     * Get comicCollection
     *
     * @return CN\ComicBundle\Entity\ComicCollection 
     */
    public function getComicCollection()
    {
        return $this->comicCollection;
    }
}