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
     * @ORM\ManyToOne(targetEntity="CN\ComicBundle\Entity\ComicCollection", inversedBy="comicStrip")
     */
    protected $comicCollection;

    public function __construct()
    {
        $this->created = new DateTime("now");
    }

}
