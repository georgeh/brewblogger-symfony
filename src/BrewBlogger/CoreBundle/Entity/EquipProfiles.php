<?php

namespace BrewBlogger\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipProfiles
 *
 * @ORM\Table(name="equip_profiles")
 * @ORM\Entity
 */
class EquipProfiles
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
     * @ORM\Column(name="equipProfileName", type="string", length=255, nullable=true)
     */
    private $equipprofilename;

    /**
     * @var string
     *
     * @ORM\Column(name="equipBatchSize", type="string", length=10, nullable=true)
     */
    private $equipbatchsize;

    /**
     * @var string
     *
     * @ORM\Column(name="equipBoilVolume", type="string", length=10, nullable=true)
     */
    private $equipboilvolume;

    /**
     * @var string
     *
     * @ORM\Column(name="equipEvapRate", type="string", length=10, nullable=true)
     */
    private $equipevaprate;

    /**
     * @var string
     *
     * @ORM\Column(name="equipLoss", type="string", length=10, nullable=true)
     */
    private $equiploss;

    /**
     * @var string
     *
     * @ORM\Column(name="equipNotes", type="text", nullable=true)
     */
    private $equipnotes;

    /**
     * @var string
     *
     * @ORM\Column(name="equipMashTunVolume", type="string", length=10, nullable=true)
     */
    private $equipmashtunvolume;

    /**
     * @var string
     *
     * @ORM\Column(name="equipMashTunWeight", type="string", length=10, nullable=true)
     */
    private $equipmashtunweight;

    /**
     * @var string
     *
     * @ORM\Column(name="equipMashTunMaterial", type="string", length=255, nullable=true)
     */
    private $equipmashtunmaterial;

    /**
     * @var string
     *
     * @ORM\Column(name="equipMashTunSpecificHeat", type="string", length=10, nullable=true)
     */
    private $equipmashtunspecificheat;

    /**
     * @var string
     *
     * @ORM\Column(name="equipMashTunDeadspace", type="string", length=10, nullable=true)
     */
    private $equipmashtundeadspace;

    /**
     * @var string
     *
     * @ORM\Column(name="equipHopUtil", type="string", length=10, nullable=true)
     */
    private $equiphoputil;

    /**
     * @var string
     *
     * @ORM\Column(name="equipTypicalEfficiency", type="string", length=10, nullable=true)
     */
    private $equiptypicalefficiency;

    /**
     * @var string
     *
     * @ORM\Column(name="equipTopUp", type="string", length=10, nullable=true)
     */
    private $equiptopup;

    /**
     * @var string
     *
     * @ORM\Column(name="equipTopUpKettle", type="string", length=10, nullable=true)
     */
    private $equiptopupkettle;

    /**
     * @var string
     *
     * @ORM\Column(name="equipBrewerID", type="string", length=255, nullable=true)
     */
    private $equipbrewerid;

    /**
     * @var string
     *
     * @ORM\Column(name="equipTypicalWaterRatio", type="string", length=10, nullable=true)
     */
    private $equiptypicalwaterratio;



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
     * Set equipprofilename
     *
     * @param string $equipprofilename
     * @return EquipProfiles
     */
    public function setName($equipprofilename)
    {
        $this->equipprofilename = $equipprofilename;
    
        return $this;
    }

    /**
     * Get equipprofilename
     *
     * @return string 
     */
    public function getName()
    {
        return $this->equipprofilename;
    }

    /**
     * Set equipbatchsize
     *
     * @param string $equipbatchsize
     * @return EquipProfiles
     */
    public function setBatchSize($equipbatchsize)
    {
        $this->equipbatchsize = $equipbatchsize;
    
        return $this;
    }

    /**
     * Get equipbatchsize
     *
     * @return string 
     */
    public function getBatchSize()
    {
        return $this->equipbatchsize;
    }

    /**
     * Set equipboilvolume
     *
     * @param string $equipboilvolume
     * @return EquipProfiles
     */
    public function setBoilVolume($equipboilvolume)
    {
        $this->equipboilvolume = $equipboilvolume;
    
        return $this;
    }

    /**
     * Get equipboilvolume
     *
     * @return string 
     */
    public function getBoilVolume()
    {
        return $this->equipboilvolume;
    }

    /**
     * Set equipevaprate
     *
     * @param string $equipevaprate
     * @return EquipProfiles
     */
    public function setEvaprate($equipevaprate)
    {
        $this->equipevaprate = $equipevaprate;
    
        return $this;
    }

    /**
     * Get equipevaprate
     *
     * @return string 
     */
    public function getEvaprate()
    {
        return $this->equipevaprate;
    }

    /**
     * Set equiploss
     *
     * @param string $equiploss
     * @return EquipProfiles
     */
    public function setLoss($equiploss)
    {
        $this->equiploss = $equiploss;
    
        return $this;
    }

    /**
     * Get equiploss
     *
     * @return string 
     */
    public function getLoss()
    {
        return $this->equiploss;
    }

    /**
     * Set equipnotes
     *
     * @param string $equipnotes
     * @return EquipProfiles
     */
    public function setNotes($equipnotes)
    {
        $this->equipnotes = $equipnotes;
    
        return $this;
    }

    /**
     * Get equipnotes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->equipnotes;
    }

    /**
     * Set equipmashtunvolume
     *
     * @param string $equipmashtunvolume
     * @return EquipProfiles
     */
    public function setMashTunVolume($equipmashtunvolume)
    {
        $this->equipmashtunvolume = $equipmashtunvolume;
    
        return $this;
    }

    /**
     * Get equipmashtunvolume
     *
     * @return string 
     */
    public function getMashTunVolume()
    {
        return $this->equipmashtunvolume;
    }

    /**
     * Set equipmashtunweight
     *
     * @param string $equipmashtunweight
     * @return EquipProfiles
     */
    public function setMashTunWeight($equipmashtunweight)
    {
        $this->equipmashtunweight = $equipmashtunweight;
    
        return $this;
    }

    /**
     * Get equipmashtunweight
     *
     * @return string 
     */
    public function getMashTunWeight()
    {
        return $this->equipmashtunweight;
    }

    /**
     * Set equipmashtunmaterial
     *
     * @param string $equipmashtunmaterial
     * @return EquipProfiles
     */
    public function setMashTunMaterial($equipmashtunmaterial)
    {
        $this->equipmashtunmaterial = $equipmashtunmaterial;
    
        return $this;
    }

    /**
     * Get equipmashtunmaterial
     *
     * @return string 
     */
    public function getMashTunMaterial()
    {
        return $this->equipmashtunmaterial;
    }

    /**
     * Set equipmashtunspecificheat
     *
     * @param string $equipmashtunspecificheat
     * @return EquipProfiles
     */
    public function setMashTunSpecificHeat($equipmashtunspecificheat)
    {
        $this->equipmashtunspecificheat = $equipmashtunspecificheat;
    
        return $this;
    }

    /**
     * Get equipmashtunspecificheat
     *
     * @return string 
     */
    public function getMashTunSpecificHeat()
    {
        return $this->equipmashtunspecificheat;
    }

    /**
     * Set equipmashtundeadspace
     *
     * @param string $equipmashtundeadspace
     * @return EquipProfiles
     */
    public function setMashTunDeadSpace($equipmashtundeadspace)
    {
        $this->equipmashtundeadspace = $equipmashtundeadspace;
    
        return $this;
    }

    /**
     * Get equipmashtundeadspace
     *
     * @return string 
     */
    public function getMashTunDeadSpace()
    {
        return $this->equipmashtundeadspace;
    }

    /**
     * Set equiphoputil
     *
     * @param string $equiphoputil
     * @return EquipProfiles
     */
    public function setHopUtil($equiphoputil)
    {
        $this->equiphoputil = $equiphoputil;
    
        return $this;
    }

    /**
     * Get equiphoputil
     *
     * @return string 
     */
    public function getHopUtil()
    {
        return $this->equiphoputil;
    }

    /**
     * Set equiptypicalefficiency
     *
     * @param string $equiptypicalefficiency
     * @return EquipProfiles
     */
    public function setTypicalEfficiency($equiptypicalefficiency)
    {
        $this->equiptypicalefficiency = $equiptypicalefficiency;
    
        return $this;
    }

    /**
     * Get equiptypicalefficiency
     *
     * @return string 
     */
    public function getTypicalEfficiency()
    {
        return $this->equiptypicalefficiency;
    }

    /**
     * Set equiptopup
     *
     * @param string $equiptopup
     * @return EquipProfiles
     */
    public function setTopUp($equiptopup)
    {
        $this->equiptopup = $equiptopup;
    
        return $this;
    }

    /**
     * Get equiptopup
     *
     * @return string 
     */
    public function getTopUp()
    {
        return $this->equiptopup;
    }

    /**
     * Set equiptopupkettle
     *
     * @param string $equiptopupkettle
     * @return EquipProfiles
     */
    public function setTopUpKettle($equiptopupkettle)
    {
        $this->equiptopupkettle = $equiptopupkettle;
    
        return $this;
    }

    /**
     * Get equiptopupkettle
     *
     * @return string 
     */
    public function getTopUpKettle()
    {
        return $this->equiptopupkettle;
    }

    /**
     * Set equipbrewerid
     *
     * @param string $equipbrewerid
     * @return EquipProfiles
     */
    public function setBrewerID($equipbrewerid)
    {
        $this->equipbrewerid = $equipbrewerid;
    
        return $this;
    }

    /**
     * Get equipbrewerid
     *
     * @return string 
     */
    public function getBrewerID()
    {
        return $this->equipbrewerid;
    }

    /**
     * Set equiptypicalwaterratio
     *
     * @param string $equiptypicalwaterratio
     * @return EquipProfiles
     */
    public function setTypicalWaterRatio($equiptypicalwaterratio)
    {
        $this->equiptypicalwaterratio = $equiptypicalwaterratio;
    
        return $this;
    }

    /**
     * Get equiptypicalwaterratio
     *
     * @return string 
     */
    public function getTypicalWaterRatio()
    {
        return $this->equiptypicalwaterratio;
    }
}