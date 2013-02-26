<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaterProfiles
 *
 * @ORM\Table(name="water_profiles")
 * @ORM\Entity
 */
class WaterProfiles
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
     * @ORM\Column(name="waterName", type="string", length=255, nullable=true)
     */
    private $watername;

    /**
     * @var string
     *
     * @ORM\Column(name="waterAmount", type="string", length=255, nullable=true)
     */
    private $wateramount;

    /**
     * @var string
     *
     * @ORM\Column(name="waterCalcium", type="string", length=255, nullable=true)
     */
    private $watercalcium;

    /**
     * @var string
     *
     * @ORM\Column(name="waterBicarbonate", type="string", length=255, nullable=true)
     */
    private $waterbicarbonate;

    /**
     * @var string
     *
     * @ORM\Column(name="waterSulfate", type="string", length=255, nullable=true)
     */
    private $watersulfate;

    /**
     * @var string
     *
     * @ORM\Column(name="waterChloride", type="string", length=255, nullable=true)
     */
    private $waterchloride;

    /**
     * @var string
     *
     * @ORM\Column(name="waterSodium", type="string", length=255, nullable=true)
     */
    private $watersodium;

    /**
     * @var string
     *
     * @ORM\Column(name="waterMagnesium", type="string", length=255, nullable=true)
     */
    private $watermagnesium;

    /**
     * @var string
     *
     * @ORM\Column(name="waterPH", type="string", length=255, nullable=true)
     */
    private $waterph;

    /**
     * @var string
     *
     * @ORM\Column(name="waterNotes", type="text", nullable=true)
     */
    private $waternotes;

    /**
     * @var string
     *
     * @ORM\Column(name="waterBrewerID", type="string", length=255, nullable=true)
     */
    private $waterbrewerid;



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
     * Set watername
     *
     * @param string $watername
     * @return WaterProfiles
     */
    public function setName($watername)
    {
        $this->watername = $watername;
    
        return $this;
    }

    /**
     * Get watername
     *
     * @return string 
     */
    public function getName()
    {
        return $this->watername;
    }

    /**
     * Set wateramount
     *
     * @param string $wateramount
     * @return WaterProfiles
     */
    public function setAmount($wateramount)
    {
        $this->wateramount = $wateramount;
    
        return $this;
    }

    /**
     * Get wateramount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->wateramount;
    }

    /**
     * Set watercalcium
     *
     * @param string $watercalcium
     * @return WaterProfiles
     */
    public function setCalcium($watercalcium)
    {
        $this->watercalcium = $watercalcium;
    
        return $this;
    }

    /**
     * Get watercalcium
     *
     * @return string 
     */
    public function getCalcium()
    {
        return $this->watercalcium;
    }

    /**
     * Set waterbicarbonate
     *
     * @param string $waterbicarbonate
     * @return WaterProfiles
     */
    public function setBicarbonate($waterbicarbonate)
    {
        $this->waterbicarbonate = $waterbicarbonate;
    
        return $this;
    }

    /**
     * Get waterbicarbonate
     *
     * @return string 
     */
    public function getBicarbonate()
    {
        return $this->waterbicarbonate;
    }

    /**
     * Set watersulfate
     *
     * @param string $watersulfate
     * @return WaterProfiles
     */
    public function setSulfate($watersulfate)
    {
        $this->watersulfate = $watersulfate;
    
        return $this;
    }

    /**
     * Get watersulfate
     *
     * @return string 
     */
    public function getSulfate()
    {
        return $this->watersulfate;
    }

    /**
     * Set waterchloride
     *
     * @param string $waterchloride
     * @return WaterProfiles
     */
    public function setChloride($waterchloride)
    {
        $this->waterchloride = $waterchloride;
    
        return $this;
    }

    /**
     * Get waterchloride
     *
     * @return string 
     */
    public function getChloride()
    {
        return $this->waterchloride;
    }

    /**
     * Set watersodium
     *
     * @param string $watersodium
     * @return WaterProfiles
     */
    public function setSodium($watersodium)
    {
        $this->watersodium = $watersodium;
    
        return $this;
    }

    /**
     * Get watersodium
     *
     * @return string 
     */
    public function getSodium()
    {
        return $this->watersodium;
    }

    /**
     * Set watermagnesium
     *
     * @param string $watermagnesium
     * @return WaterProfiles
     */
    public function setMagnesium($watermagnesium)
    {
        $this->watermagnesium = $watermagnesium;
    
        return $this;
    }

    /**
     * Get watermagnesium
     *
     * @return string 
     */
    public function getMagnesium()
    {
        return $this->watermagnesium;
    }

    /**
     * Set waterph
     *
     * @param string $waterph
     * @return WaterProfiles
     */
    public function setPH($waterph)
    {
        $this->waterph = $waterph;
    
        return $this;
    }

    /**
     * Get waterph
     *
     * @return string 
     */
    public function getPH()
    {
        return $this->waterph;
    }

    /**
     * Set waternotes
     *
     * @param string $waternotes
     * @return WaterProfiles
     */
    public function setNotes($waternotes)
    {
        $this->waternotes = $waternotes;
    
        return $this;
    }

    /**
     * Get waternotes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->waternotes;
    }

    /**
     * Set waterbrewerid
     *
     * @param string $waterbrewerid
     * @return WaterProfiles
     */
    public function setBrewerID($waterbrewerid)
    {
        $this->waterbrewerid = $waterbrewerid;
    
        return $this;
    }

    /**
     * Get waterbrewerid
     *
     * @return string 
     */
    public function getBrewerID()
    {
        return $this->waterbrewerid;
    }
}