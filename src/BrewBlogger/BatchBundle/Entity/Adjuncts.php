<?php

namespace BrewBlogger\BatchBundle\Entity;

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
    public function setAdjunctname($adjunctname)
    {
        $this->adjunctname = $adjunctname;
    
        return $this;
    }

    /**
     * Get adjunctname
     *
     * @return string 
     */
    public function getAdjunctname()
    {
        return $this->adjunctname;
    }

    /**
     * Set adjunctorigin
     *
     * @param string $adjunctorigin
     * @return Adjuncts
     */
    public function setAdjunctorigin($adjunctorigin)
    {
        $this->adjunctorigin = $adjunctorigin;
    
        return $this;
    }

    /**
     * Get adjunctorigin
     *
     * @return string 
     */
    public function getAdjunctorigin()
    {
        return $this->adjunctorigin;
    }

    /**
     * Set adjunctsupplier
     *
     * @param string $adjunctsupplier
     * @return Adjuncts
     */
    public function setAdjunctsupplier($adjunctsupplier)
    {
        $this->adjunctsupplier = $adjunctsupplier;
    
        return $this;
    }

    /**
     * Get adjunctsupplier
     *
     * @return string 
     */
    public function getAdjunctsupplier()
    {
        return $this->adjunctsupplier;
    }

    /**
     * Set adjunctinfo
     *
     * @param string $adjunctinfo
     * @return Adjuncts
     */
    public function setAdjunctinfo($adjunctinfo)
    {
        $this->adjunctinfo = $adjunctinfo;
    
        return $this;
    }

    /**
     * Get adjunctinfo
     *
     * @return string 
     */
    public function getAdjunctinfo()
    {
        return $this->adjunctinfo;
    }

    /**
     * Set adjunctppg
     *
     * @param float $adjunctppg
     * @return Adjuncts
     */
    public function setAdjunctppg($adjunctppg)
    {
        $this->adjunctppg = $adjunctppg;
    
        return $this;
    }

    /**
     * Get adjunctppg
     *
     * @return float 
     */
    public function getAdjunctppg()
    {
        return $this->adjunctppg;
    }

    /**
     * Set adjunctlovibondlow
     *
     * @param float $adjunctlovibondlow
     * @return Adjuncts
     */
    public function setAdjunctlovibondlow($adjunctlovibondlow)
    {
        $this->adjunctlovibondlow = $adjunctlovibondlow;
    
        return $this;
    }

    /**
     * Get adjunctlovibondlow
     *
     * @return float 
     */
    public function getAdjunctlovibondlow()
    {
        return $this->adjunctlovibondlow;
    }

    /**
     * Set adjunctlovibondhigh
     *
     * @param float $adjunctlovibondhigh
     * @return Adjuncts
     */
    public function setAdjunctlovibondhigh($adjunctlovibondhigh)
    {
        $this->adjunctlovibondhigh = $adjunctlovibondhigh;
    
        return $this;
    }

    /**
     * Get adjunctlovibondhigh
     *
     * @return float 
     */
    public function getAdjunctlovibondhigh()
    {
        return $this->adjunctlovibondhigh;
    }
}