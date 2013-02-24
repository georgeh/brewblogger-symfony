<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hops
 *
 * @ORM\Table(name="hops")
 * @ORM\Entity
 */
class Hops
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
     * @ORM\Column(name="hopsName", type="string", length=250, nullable=true)
     */
    private $hopsname;

    /**
     * @var string
     *
     * @ORM\Column(name="hopsGrown", type="string", length=250, nullable=true)
     */
    private $hopsgrown;

    /**
     * @var string
     *
     * @ORM\Column(name="hopsInfo", type="text", nullable=true)
     */
    private $hopsinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="hopsUse", type="string", length=250, nullable=true)
     */
    private $hopsuse;

    /**
     * @var string
     *
     * @ORM\Column(name="hopsExample", type="string", length=250, nullable=true)
     */
    private $hopsexample;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hopsAAULow", type="boolean", nullable=true)
     */
    private $hopsaaulow;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hopsAAUHigh", type="boolean", nullable=true)
     */
    private $hopsaauhigh;

    /**
     * @var string
     *
     * @ORM\Column(name="hopsSub", type="string", length=250, nullable=true)
     */
    private $hopssub;



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
     * Set hopsname
     *
     * @param string $hopsname
     * @return Hops
     */
    public function setHopsname($hopsname)
    {
        $this->hopsname = $hopsname;
    
        return $this;
    }

    /**
     * Get hopsname
     *
     * @return string 
     */
    public function getHopsname()
    {
        return $this->hopsname;
    }

    /**
     * Set hopsgrown
     *
     * @param string $hopsgrown
     * @return Hops
     */
    public function setHopsgrown($hopsgrown)
    {
        $this->hopsgrown = $hopsgrown;
    
        return $this;
    }

    /**
     * Get hopsgrown
     *
     * @return string 
     */
    public function getHopsgrown()
    {
        return $this->hopsgrown;
    }

    /**
     * Set hopsinfo
     *
     * @param string $hopsinfo
     * @return Hops
     */
    public function setHopsinfo($hopsinfo)
    {
        $this->hopsinfo = $hopsinfo;
    
        return $this;
    }

    /**
     * Get hopsinfo
     *
     * @return string 
     */
    public function getHopsinfo()
    {
        return $this->hopsinfo;
    }

    /**
     * Set hopsuse
     *
     * @param string $hopsuse
     * @return Hops
     */
    public function setHopsuse($hopsuse)
    {
        $this->hopsuse = $hopsuse;
    
        return $this;
    }

    /**
     * Get hopsuse
     *
     * @return string 
     */
    public function getHopsuse()
    {
        return $this->hopsuse;
    }

    /**
     * Set hopsexample
     *
     * @param string $hopsexample
     * @return Hops
     */
    public function setHopsexample($hopsexample)
    {
        $this->hopsexample = $hopsexample;
    
        return $this;
    }

    /**
     * Get hopsexample
     *
     * @return string 
     */
    public function getHopsexample()
    {
        return $this->hopsexample;
    }

    /**
     * Set hopsaaulow
     *
     * @param boolean $hopsaaulow
     * @return Hops
     */
    public function setHopsaaulow($hopsaaulow)
    {
        $this->hopsaaulow = $hopsaaulow;
    
        return $this;
    }

    /**
     * Get hopsaaulow
     *
     * @return boolean 
     */
    public function getHopsaaulow()
    {
        return $this->hopsaaulow;
    }

    /**
     * Set hopsaauhigh
     *
     * @param boolean $hopsaauhigh
     * @return Hops
     */
    public function setHopsaauhigh($hopsaauhigh)
    {
        $this->hopsaauhigh = $hopsaauhigh;
    
        return $this;
    }

    /**
     * Get hopsaauhigh
     *
     * @return boolean 
     */
    public function getHopsaauhigh()
    {
        return $this->hopsaauhigh;
    }

    /**
     * Set hopssub
     *
     * @param string $hopssub
     * @return Hops
     */
    public function setHopssub($hopssub)
    {
        $this->hopssub = $hopssub;
    
        return $this;
    }

    /**
     * Get hopssub
     *
     * @return string 
     */
    public function getHopssub()
    {
        return $this->hopssub;
    }
}