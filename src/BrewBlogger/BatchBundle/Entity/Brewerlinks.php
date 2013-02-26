<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brewerlinks
 *
 * @ORM\Table(name="brewerlinks")
 * @ORM\Entity
 */
class Brewerlinks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerLinkName", type="string", length=200, nullable=true)
     */
    private $brewerlinkname;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerLinkURL", type="string", length=200, nullable=true)
     */
    private $brewerlinkurl;



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
     * Set brewerlinkname
     *
     * @param string $brewerlinkname
     * @return Brewerlinks
     */
    public function setName($brewerlinkname)
    {
        $this->brewerlinkname = $brewerlinkname;
    
        return $this;
    }

    /**
     * Get brewerlinkname
     *
     * @return string 
     */
    public function getName()
    {
        return $this->brewerlinkname;
    }

    /**
     * Set brewerlinkurl
     *
     * @param string $brewerlinkurl
     * @return Brewerlinks
     */
    public function setURL($brewerlinkurl)
    {
        $this->brewerlinkurl = $brewerlinkurl;
    
        return $this;
    }

    /**
     * Get brewerlinkurl
     *
     * @return string 
     */
    public function getURL()
    {
        return $this->brewerlinkurl;
    }
}