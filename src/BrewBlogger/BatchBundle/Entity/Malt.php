<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Malt
 *
 * @ORM\Table(name="malt")
 * @ORM\Entity
 */
class Malt
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
     * @ORM\Column(name="maltName", type="string", length=100, nullable=false)
     */
    private $maltname;

    /**
     * @var string
     *
     * @ORM\Column(name="maltInfo", type="text", nullable=true)
     */
    private $maltinfo;

    /**
     * @var float
     *
     * @ORM\Column(name="maltPPG", type="decimal", nullable=false)
     */
    private $maltppg;

    /**
     * @var string
     *
     * @ORM\Column(name="maltOrigin", type="string", length=100, nullable=true)
     */
    private $maltorigin;

    /**
     * @var string
     *
     * @ORM\Column(name="maltSupplier", type="string", length=100, nullable=true)
     */
    private $maltsupplier;

    /**
     * @var float
     *
     * @ORM\Column(name="maltLovibondLow", type="decimal", nullable=false)
     */
    private $maltlovibondlow;

    /**
     * @var float
     *
     * @ORM\Column(name="maltLovibondHigh", type="decimal", nullable=false)
     */
    private $maltlovibondhigh;



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
     * Set maltname
     *
     * @param string $maltname
     * @return Malt
     */
    public function setName($maltname)
    {
        $this->maltname = $maltname;
    
        return $this;
    }

    /**
     * Get maltname
     *
     * @return string 
     */
    public function getName()
    {
        return $this->maltname;
    }

    /**
     * Set maltinfo
     *
     * @param string $maltinfo
     * @return Malt
     */
    public function setInfo($maltinfo)
    {
        $this->maltinfo = $maltinfo;
    
        return $this;
    }

    /**
     * Get maltinfo
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->maltinfo;
    }

    /**
     * Set maltppg
     *
     * @param float $maltppg
     * @return Malt
     */
    public function setPPG($maltppg)
    {
        $this->maltppg = $maltppg;
    
        return $this;
    }

    /**
     * Get maltppg
     *
     * @return float 
     */
    public function getPPG()
    {
        return $this->maltppg;
    }

    /**
     * Set maltorigin
     *
     * @param string $maltorigin
     * @return Malt
     */
    public function setOrigin($maltorigin)
    {
        $this->maltorigin = $maltorigin;
    
        return $this;
    }

    /**
     * Get maltorigin
     *
     * @return string 
     */
    public function getOrigin()
    {
        return $this->maltorigin;
    }

    /**
     * Set maltsupplier
     *
     * @param string $maltsupplier
     * @return Malt
     */
    public function setSupplier($maltsupplier)
    {
        $this->maltsupplier = $maltsupplier;
    
        return $this;
    }

    /**
     * Get maltsupplier
     *
     * @return string 
     */
    public function getSupplier()
    {
        return $this->maltsupplier;
    }

    /**
     * Set maltlovibondlow
     *
     * @param float $maltlovibondlow
     * @return Malt
     */
    public function setLovibondLow($maltlovibondlow)
    {
        $this->maltlovibondlow = $maltlovibondlow;
    
        return $this;
    }

    /**
     * Get maltlovibondlow
     *
     * @return float 
     */
    public function getLovibondLow()
    {
        return $this->maltlovibondlow;
    }

    /**
     * Set maltlovibondhigh
     *
     * @param float $maltlovibondhigh
     * @return Malt
     */
    public function setLovibondHigh($maltlovibondhigh)
    {
        $this->maltlovibondhigh = $maltlovibondhigh;
    
        return $this;
    }

    /**
     * Get maltlovibondhigh
     *
     * @return float 
     */
    public function getLovibondHigh()
    {
        return $this->maltlovibondhigh;
    }
}