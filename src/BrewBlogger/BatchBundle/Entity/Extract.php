<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Extract
 *
 * @ORM\Table(name="extract")
 * @ORM\Entity
 */
class Extract
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="extractName", type="string", length=100, nullable=false)
     */
    private $extractname;

    /**
     * @var string
     *
     * @ORM\Column(name="extractInfo", type="text", nullable=true)
     */
    private $extractinfo;

    /**
     * @var float
     *
     * @ORM\Column(name="extractPPG", type="decimal", nullable=false)
     */
    private $extractppg;

    /**
     * @var string
     *
     * @ORM\Column(name="extractOrigin", type="string", length=100, nullable=true)
     */
    private $extractorigin;

    /**
     * @var string
     *
     * @ORM\Column(name="extractSupplier", type="string", length=100, nullable=true)
     */
    private $extractsupplier;

    /**
     * @var boolean
     *
     * @ORM\Column(name="extractLME", type="boolean", nullable=false)
     */
    private $extractlme;

    /**
     * @var float
     *
     * @ORM\Column(name="extractLovibondLow", type="decimal", nullable=false)
     */
    private $extractlovibondlow;

    /**
     * @var float
     *
     * @ORM\Column(name="extractLovibondHigh", type="decimal", nullable=false)
     */
    private $extractlovibondhigh;



    /**
     * Get id
     *
     * @return boolean 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set extractname
     *
     * @param string $extractname
     * @return Extract
     */
    public function setName($extractname)
    {
        $this->extractname = $extractname;
    
        return $this;
    }

    /**
     * Get extractname
     *
     * @return string 
     */
    public function getName()
    {
        return $this->extractname;
    }

    /**
     * Set extractinfo
     *
     * @param string $extractinfo
     * @return Extract
     */
    public function setInfo($extractinfo)
    {
        $this->extractinfo = $extractinfo;
    
        return $this;
    }

    /**
     * Get extractinfo
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->extractinfo;
    }

    /**
     * Set extractppg
     *
     * @param float $extractppg
     * @return Extract
     */
    public function setPPG($extractppg)
    {
        $this->extractppg = $extractppg;
    
        return $this;
    }

    /**
     * Get extractppg
     *
     * @return float 
     */
    public function getPPG()
    {
        return $this->extractppg;
    }

    /**
     * Set extractorigin
     *
     * @param string $extractorigin
     * @return Extract
     */
    public function setOrigin($extractorigin)
    {
        $this->extractorigin = $extractorigin;
    
        return $this;
    }

    /**
     * Get extractorigin
     *
     * @return string 
     */
    public function getOrigin()
    {
        return $this->extractorigin;
    }

    /**
     * Set extractsupplier
     *
     * @param string $extractsupplier
     * @return Extract
     */
    public function setSupplier($extractsupplier)
    {
        $this->extractsupplier = $extractsupplier;
    
        return $this;
    }

    /**
     * Get extractsupplier
     *
     * @return string 
     */
    public function getSupplier()
    {
        return $this->extractsupplier;
    }

    /**
     * Set extractlme
     *
     * @param boolean $extractlme
     * @return Extract
     */
    public function setLME($extractlme)
    {
        $this->extractlme = $extractlme;
    
        return $this;
    }

    /**
     * Get extractlme
     *
     * @return boolean 
     */
    public function getLME()
    {
        return $this->extractlme;
    }

    /**
     * Set extractlovibondlow
     *
     * @param float $extractlovibondlow
     * @return Extract
     */
    public function setLovibondLow($extractlovibondlow)
    {
        $this->extractlovibondlow = $extractlovibondlow;
    
        return $this;
    }

    /**
     * Get extractlovibondlow
     *
     * @return float 
     */
    public function getLovibondLow()
    {
        return $this->extractlovibondlow;
    }

    /**
     * Set extractlovibondhigh
     *
     * @param float $extractlovibondhigh
     * @return Extract
     */
    public function setLovibondHigh($extractlovibondhigh)
    {
        $this->extractlovibondhigh = $extractlovibondhigh;
    
        return $this;
    }

    /**
     * Get extractlovibondhigh
     *
     * @return float 
     */
    public function getLovibondHigh()
    {
        return $this->extractlovibondhigh;
    }
}