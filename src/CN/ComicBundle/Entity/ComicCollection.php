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
    protected $comicStrip;

    public function __construct()
    {
        $this->created = new DateTime("now");
    }

}
