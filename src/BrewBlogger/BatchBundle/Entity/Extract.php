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
    public function setExtractname($extractname)
    {
        $this->extractname = $extractname;
    
        return $this;
    }

    /**
     * Get extractname
     *
     * @return string 
     */
    public function getExtractname()
    {
        return $this->extractname;
    }

    /**
     * Set extractinfo
     *
     * @param string $extractinfo
     * @return Extract
     */
    public function setExtractinfo($extractinfo)
    {
        $this->extractinfo = $extractinfo;
    
        return $this;
    }

    /**
     * Get extractinfo
     *
     * @return string 
     */
    public function getExtractinfo()
    {
        return $this->extractinfo;
    }

    /**
     * Set extractppg
     *
     * @param float $extractppg
     * @return Extract
     */
    public function setExtractppg($extractppg)
    {
        $this->extractppg = $extractppg;
    
        return $this;
    }

    /**
     * Get extractppg
     *
     * @return float 
     */
    public function getExtractppg()
    {
        return $this->extractppg;
    }

    /**
     * Set extractorigin
     *
     * @param string $extractorigin
     * @return Extract
     */
    public function setExtractorigin($extractorigin)
    {
        $this->extractorigin = $extractorigin;
    
        return $this;
    }

    /**
     * Get extractorigin
     *
     * @return string 
     */
    public function getExtractorigin()
    {
        return $this->extractorigin;
    }

    /**
     * Set extractsupplier
     *
     * @param string $extractsupplier
     * @return Extract
     */
    public function setExtractsupplier($extractsupplier)
    {
        $this->extractsupplier = $extractsupplier;
    
        return $this;
    }

    /**
     * Get extractsupplier
     *
     * @return string 
     */
    public function getExtractsupplier()
    {
        return $this->extractsupplier;
    }

    /**
     * Set extractlme
     *
     * @param boolean $extractlme
     * @return Extract
     */
    public function setExtractlme($extractlme)
    {
        $this->extractlme = $extractlme;
    
        return $this;
    }

    /**
     * Get extractlme
     *
     * @return boolean 
     */
    public function getExtractlme()
    {
        return $this->extractlme;
    }

    /**
     * Set extractlovibondlow
     *
     * @param float $extractlovibondlow
     * @return Extract
     */
    public function setExtractlovibondlow($extractlovibondlow)
    {
        $this->extractlovibondlow = $extractlovibondlow;
    
        return $this;
    }

    /**
     * Get extractlovibondlow
     *
     * @return float 
     */
    public function getExtractlovibondlow()
    {
        return $this->extractlovibondlow;
    }

    /**
     * Set extractlovibondhigh
     *
     * @param float $extractlovibondhigh
     * @return Extract
     */
    public function setExtractlovibondhigh($extractlovibondhigh)
    {
        $this->extractlovibondhigh = $extractlovibondhigh;
    
        return $this;
    }

    /**
     * Get extractlovibondhigh
     *
     * @return float 
     */
    public function getExtractlovibondhigh()
    {
        return $this->extractlovibondhigh;
    }
}