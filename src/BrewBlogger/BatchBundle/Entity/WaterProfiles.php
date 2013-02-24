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
    public function setWatername($watername)
    {
        $this->watername = $watername;
    
        return $this;
    }

    /**
     * Get watername
     *
     * @return string 
     */
    public function getWatername()
    {
        return $this->watername;
    }

    /**
     * Set wateramount
     *
     * @param string $wateramount
     * @return WaterProfiles
     */
    public function setWateramount($wateramount)
    {
        $this->wateramount = $wateramount;
    
        return $this;
    }

    /**
     * Get wateramount
     *
     * @return string 
     */
    public function getWateramount()
    {
        return $this->wateramount;
    }

    /**
     * Set watercalcium
     *
     * @param string $watercalcium
     * @return WaterProfiles
     */
    public function setWatercalcium($watercalcium)
    {
        $this->watercalcium = $watercalcium;
    
        return $this;
    }

    /**
     * Get watercalcium
     *
     * @return string 
     */
    public function getWatercalcium()
    {
        return $this->watercalcium;
    }

    /**
     * Set waterbicarbonate
     *
     * @param string $waterbicarbonate
     * @return WaterProfiles
     */
    public function setWaterbicarbonate($waterbicarbonate)
    {
        $this->waterbicarbonate = $waterbicarbonate;
    
        return $this;
    }

    /**
     * Get waterbicarbonate
     *
     * @return string 
     */
    public function getWaterbicarbonate()
    {
        return $this->waterbicarbonate;
    }

    /**
     * Set watersulfate
     *
     * @param string $watersulfate
     * @return WaterProfiles
     */
    public function setWatersulfate($watersulfate)
    {
        $this->watersulfate = $watersulfate;
    
        return $this;
    }

    /**
     * Get watersulfate
     *
     * @return string 
     */
    public function getWatersulfate()
    {
        return $this->watersulfate;
    }

    /**
     * Set waterchloride
     *
     * @param string $waterchloride
     * @return WaterProfiles
     */
    public function setWaterchloride($waterchloride)
    {
        $this->waterchloride = $waterchloride;
    
        return $this;
    }

    /**
     * Get waterchloride
     *
     * @return string 
     */
    public function getWaterchloride()
    {
        return $this->waterchloride;
    }

    /**
     * Set watersodium
     *
     * @param string $watersodium
     * @return WaterProfiles
     */
    public function setWatersodium($watersodium)
    {
        $this->watersodium = $watersodium;
    
        return $this;
    }

    /**
     * Get watersodium
     *
     * @return string 
     */
    public function getWatersodium()
    {
        return $this->watersodium;
    }

    /**
     * Set watermagnesium
     *
     * @param string $watermagnesium
     * @return WaterProfiles
     */
    public function setWatermagnesium($watermagnesium)
    {
        $this->watermagnesium = $watermagnesium;
    
        return $this;
    }

    /**
     * Get watermagnesium
     *
     * @return string 
     */
    public function getWatermagnesium()
    {
        return $this->watermagnesium;
    }

    /**
     * Set waterph
     *
     * @param string $waterph
     * @return WaterProfiles
     */
    public function setWaterph($waterph)
    {
        $this->waterph = $waterph;
    
        return $this;
    }

    /**
     * Get waterph
     *
     * @return string 
     */
    public function getWaterph()
    {
        return $this->waterph;
    }

    /**
     * Set waternotes
     *
     * @param string $waternotes
     * @return WaterProfiles
     */
    public function setWaternotes($waternotes)
    {
        $this->waternotes = $waternotes;
    
        return $this;
    }

    /**
     * Get waternotes
     *
     * @return string 
     */
    public function getWaternotes()
    {
        return $this->waternotes;
    }

    /**
     * Set waterbrewerid
     *
     * @param string $waterbrewerid
     * @return WaterProfiles
     */
    public function setWaterbrewerid($waterbrewerid)
    {
        $this->waterbrewerid = $waterbrewerid;
    
        return $this;
    }

    /**
     * Get waterbrewerid
     *
     * @return string 
     */
    public function getWaterbrewerid()
    {
        return $this->waterbrewerid;
    }
}