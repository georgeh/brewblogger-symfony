<?php

namespace BrewBlogger\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adjuncts
 *
 * @ORM\Table(name="adjuncts")
 * @ORM\Entity
 */
class Adjuncts
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
     * @ORM\Column(name="adjunctName", type="string", length=100, nullable=false)
     */
    private $adjunctname;

    /**
     * @var string
     *
     * @ORM\Column(name="adjunctOrigin", type="string", length=100, nullable=true)
     */
    private $adjunctorigin;

    /**
     * @var string
     *
     * @ORM\Column(name="adjunctSupplier", type="string", length=100, nullable=true)
     */
    private $adjunctsupplier;

    /**
     * @var string
     *
     * @ORM\Column(name="adjunctInfo", type="text", nullable=true)
     */
    private $adjunctinfo;

    /**
     * @var float
     *
     * @ORM\Column(name="adjunctPPG", type="decimal", nullable=false)
     */
    private $adjunctppg;

    /**
     * @var float
     *
     * @ORM\Column(name="adjunctLovibondLow", type="decimal", nullable=false)
     */
    private $adjunctlovibondlow;

    /**
     * @var float
     *
     * @ORM\Column(name="adjunctLovibondHigh", type="decimal", nullable=false)
     */
    private $adjunctlovibondhigh;



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
     * Set adjunctname
     *
     * @param string $adjunctname
     * @return Adjuncts
     */
    public function setName($adjunctname)
    {
        $this->adjunctname = $adjunctname;
    
        return $this;
    }

    /**
     * Get adjunctname
     *
     * @return string 
     */
    public function getName()
    {
        return $this->adjunctname;
    }

    /**
     * Set adjunctorigin
     *
     * @param string $adjunctorigin
     * @return Adjuncts
     */
    public function setOrigin($adjunctorigin)
    {
        $this->adjunctorigin = $adjunctorigin;
    
        return $this;
    }

    /**
     * Get adjunctorigin
     *
     * @return string 
     */
    public function getOrigin()
    {
        return $this->adjunctorigin;
    }

    /**
     * Set adjunctsupplier
     *
     * @param string $adjunctsupplier
     * @return Adjuncts
     */
    public function setSupplier($adjunctsupplier)
    {
        $this->adjunctsupplier = $adjunctsupplier;
    
        return $this;
    }

    /**
     * Get adjunctsupplier
     *
     * @return string 
     */
    public function getSupplier()
    {
        return $this->adjunctsupplier;
    }

    /**
     * Set adjunctinfo
     *
     * @param string $adjunctinfo
     * @return Adjuncts
     */
    public function setInfo($adjunctinfo)
    {
        $this->adjunctinfo = $adjunctinfo;
    
        return $this;
    }

    /**
     * Get adjunctinfo
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->adjunctinfo;
    }

    /**
     * Set adjunctppg
     *
     * @param float $adjunctppg
     * @return Adjuncts
     */
    public function setPPG($adjunctppg)
    {
        $this->adjunctppg = $adjunctppg;
    
        return $this;
    }

    /**
     * Get adjunctppg
     *
     * @return float 
     */
    public function getPPG()
    {
        return $this->adjunctppg;
    }

    /**
     * Set adjunctlovibondlow
     *
     * @param float $adjunctlovibondlow
     * @return Adjuncts
     */
    public function setLovibondLow($adjunctlovibondlow)
    {
        $this->adjunctlovibondlow = $adjunctlovibondlow;
    
        return $this;
    }

    /**
     * Get adjunctlovibondlow
     *
     * @return float 
     */
    public function getLovibondLow()
    {
        return $this->adjunctlovibondlow;
    }

    /**
     * Set adjunctlovibondhigh
     *
     * @param float $adjunctlovibondhigh
     * @return Adjuncts
     */
    public function setLovibondHigh($adjunctlovibondhigh)
    {
        $this->adjunctlovibondhigh = $adjunctlovibondhigh;
    
        return $this;
    }

    /**
     * Get adjunctlovibondhigh
     *
     * @return float 
     */
    public function getLovibondHigh()
    {
        return $this->adjunctlovibondhigh;
    }
}