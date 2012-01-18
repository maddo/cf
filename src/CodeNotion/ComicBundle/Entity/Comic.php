<?php

namespace CodeNotion/ComicBundle/Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Comic
{
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;


    protected $date_format; // = db.StringProperty()
    protected $links_pattern; // = db.StringProperty()
    protected $images_pattern; // = db.StringProperty()
    protected $first_url; // = db.LinkProperty()
    protected $name; // = db.StringProperty()
    protected $logo; // = db.LinkProperty()
    protected $url; // = db.LinkProperty()
    protected $date_added; // = db.DateTimeProperty(auto_now_add=True)
                                   

    
   /**
    * @ORM\Column(type="string")
    */
    protected $name;
  
   /**
    *
    * @ORM\OneToMany(targetEntity="F5\ElectronicThingsBundle\Entity\Product", mappedBy="brand")
    */
    protected $products;
}
