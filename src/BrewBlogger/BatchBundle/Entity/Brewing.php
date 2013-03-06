<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Brewing
 *
 * @ORM\Table(name="brewing")
 * @ORM\Entity
 */
class Brewing
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
     * @ORM\Column(name="brewName", type="string", length=250, nullable=true)
     */
    private $brewname;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyle", type="string", length=250, nullable=true)
     */
    private $brewstyle;

    /**
     * @var string
     *
     * @ORM\Column(name="brewBatchNum", type="string", length=100, nullable=true)
     */
    private $brewbatchnum;

    /**
     * @var string
     *
     * @ORM\Column(name="brewCondition", type="string", length=100, nullable=true)
     */
    private $brewcondition;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="brewDate", type="date", nullable=true)
     */
    private $brewdate;

    /**
     * @var string
     *
     * @ORM\Column(name="brewYield", type="string", length=10, nullable=true)
     */
    private $brewyield;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMethod", type="string", length=200, nullable=true)
     */
    private $brewmethod;

    /**
     * @var string
     *
     * @ORM\Column(name="brewCost", type="string", length=10, nullable=true)
     */
    private $brewcost;

    /**
     * @var string
     *
     * @ORM\Column(name="brewLink1", type="string", length=250, nullable=true)
     */
    private $brewlink1;

    /**
     * @var string
     *
     * @ORM\Column(name="brewLink1Name", type="string", length=250, nullable=true)
     */
    private $brewlink1name;

    /**
     * @var string
     *
     * @ORM\Column(name="brewLink2", type="string", length=250, nullable=true)
     */
    private $brewlink2;

    /**
     * @var string
     *
     * @ORM\Column(name="brewLink2Name", type="string", length=250, nullable=true)
     */
    private $brewlink2name;

    /**
     * @var string
     *
     * @ORM\Column(name="brewInfo", type="text", nullable=true)
     */
    private $brewinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="brewYeastAmount", type="string", length=25, nullable=true)
     */
    private $brewyeastamount;

    /**
     * @var string
     *
     * @ORM\Column(name="brewLabelImage", type="string", length=250, nullable=true)
     */
    private $brewlabelimage;

    /**
     * @var string
     *
     * @ORM\Column(name="brewOG", type="string", length=10, nullable=true)
     */
    private $brewog;

    /**
     * @var string
     *
     * @ORM\Column(name="brewFG", type="string", length=10, nullable=true)
     */
    private $brewfg;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGravity1", type="string", length=10, nullable=true)
     */
    private $brewgravity1;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGravity1Days", type="string", length=10, nullable=true)
     */
    private $brewgravity1days;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGravity2", type="string", length=10, nullable=true)
     */
    private $brewgravity2;

    /**
     * @var string
     *
     * @ORM\Column(name="brewGravity2Days", type="string", length=10, nullable=true)
     */
    private $brewgravity2days;

    /**
     * @var string
     *
     * @ORM\Column(name="brewProcedure", type="text", nullable=true)
     */
    private $brewprocedure;

    /**
     * @var string
     *
     * @ORM\Column(name="brewSpecialProcedure", type="text", nullable=true)
     */
    private $brewspecialprocedure;

    /**
     * @var string
     *
     * @ORM\Column(name="brewPrimary", type="string", length=10, nullable=true)
     */
    private $brewprimary;

    /**
     * @var string
     *
     * @ORM\Column(name="brewPrimaryTemp", type="string", length=10, nullable=true)
     */
    private $brewprimarytemp;

    /**
     * @var string
     *
     * @ORM\Column(name="brewSecondary", type="string", length=10, nullable=true)
     */
    private $brewsecondary;

    /**
     * @var string
     *
     * @ORM\Column(name="brewSecondaryTemp", type="string", length=10, nullable=true)
     */
    private $brewsecondarytemp;

    /**
     * @var string
     *
     * @ORM\Column(name="brewTertiary", type="string", length=10, nullable=true)
     */
    private $brewtertiary;

    /**
     * @var string
     *
     * @ORM\Column(name="brewTertiaryTemp", type="string", length=10, nullable=true)
     */
    private $brewtertiarytemp;

    /**
     * @var string
     *
     * @ORM\Column(name="brewLager", type="string", length=10, nullable=true)
     */
    private $brewlager;

    /**
     * @var string
     *
     * @ORM\Column(name="brewLagerTemp", type="string", length=10, nullable=true)
     */
    private $brewlagertemp;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAge", type="string", length=10, nullable=true)
     */
    private $brewage;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAgeTemp", type="string", length=10, nullable=true)
     */
    private $brewagetemp;

    /**
     * @var float
     *
     * @ORM\Column(name="brewBitterness", type="float", nullable=true)
     */
    private $brewbitterness;

    /**
     * @var string
     *
     * @ORM\Column(name="brewIBUFormula", type="string", length=250, nullable=true)
     */
    private $brewibuformula;

    /**
     * @var float
     *
     * @ORM\Column(name="brewLovibond", type="float", nullable=true)
     */
    private $brewlovibond;

    /**
     * @var string
     *
     * @ORM\Column(name="brewColorFormula", type="string", length=50, nullable=true)
     */
    private $brewcolorformula;

    /**
     * @var string
     *
     * @ORM\Column(name="brewComments", type="text", nullable=true)
     */
    private $brewcomments;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashType", type="string", length=250, nullable=true)
     */
    private $brewmashtype;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashGrainWeight", type="string", length=10, nullable=true)
     */
    private $brewmashgrainweight;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashSpargAmt", type="string", length=20, nullable=true)
     */
    private $brewmashspargamt;

    /**
     * @var string
     *
     * @ORM\Column(name="brewEfficiency", type="string", length=10, nullable=true)
     */
    private $brewefficiency;

    /**
     * @var string
     *
     * @ORM\Column(name="brewPPG", type="string", length=10, nullable=true)
     */
    private $brewppg;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStatus", type="string", length=250, nullable=true)
     */
    private $brewstatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="brewTapDate", type="date", nullable=true)
     */
    private $brewtapdate;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMashGravity", type="string", length=10, nullable=true)
     */
    private $brewmashgravity;

    /**
     * @var string
     *
     * @ORM\Column(name="brewPreBoilAmt", type="string", length=10, nullable=true)
     */
    private $brewpreboilamt;

    /**
     * @var string
     *
     * @ORM\Column(name="brewBrewerID", type="string", length=250, nullable=true)
     */
    private $brewbrewerid;

    /**
     * @var string
     *
     * @ORM\Column(name="brewTargetOG", type="string", length=250, nullable=true)
     */
    private $brewtargetog;

    /**
     * @var string
     *
     * @ORM\Column(name="brewTargetFG", type="string", length=250, nullable=true)
     */
    private $brewtargetfg;

    /**
     * @var integer
     *
     * @ORM\Column(name="brewMashProfile", type="integer", nullable=true)
     */
    private $brewmashprofile;

    /**
     * @var integer
     *
     * @ORM\Column(name="brewWaterProfile", type="integer", nullable=true)
     */
    private $brewwaterprofile;

    /**
     * @var integer
     *
     * @ORM\Column(name="brewYeastProfile", type="integer", nullable=true)
     */
    private $brewyeastprofile;

    /**
     * @var integer
     *
     * @ORM\Column(name="brewEquipProfile", type="integer", nullable=true)
     */
    private $brewequipprofile;

    /**
     * @var integer
     *
     * @ORM\Column(name="brewBoilTime", type="integer", nullable=true)
     */
    private $brewboiltime;

    /**
     * @var string
     *
     * @ORM\Column(name="brewFeatured", type="string", length=1, nullable=true)
     */
    private $brewfeatured;

    /**
     * @var string
     *
     * @ORM\Column(name="brewWaterRatio", type="string", length=8, nullable=true)
     */
    private $brewwaterratio;

    /**
     * @var string
     *
     * @ORM\Column(name="brewArchive", type="string", length=8, nullable=true)
     */
    private $brewarchive;


    /**
     * @var YeastProfiles
     * 
     * @ORM\ManyToOne(targetEntity="YeastProfiles")
     * @ORM\JoinColumn(name="brewYeastProfile", referencedColumnName="id")
     */
    private $yeastProfile;
    
    
    /**
     * @var EquipProfiles
     * 
     * @ORM\ManyToOne(targetEntity="EquipProfiles")
     * @ORM\JoinColumn(name="brewEquipProfile", referencedColumnName="id")
     */
    private $equipmentProfile;
    
    /**
     * @var MashProfiles
     * 
     * @ORM\ManyToOne(targetEntity="MashProfiles")
     * @ORM\JoinColumn(name="brewMashProfile", referencedColumnName="id")
     */
    private $mashProfile;
    
    /**
     * @var WaterProfiles
     * 
     * @ORM\ManyToOne(targetEntity="WaterProfiles")
     * @ORM\JoinColumn(name="brewWaterProfile", referencedColumnName="id")
     */
    private $waterProfile;
    
    /**
     * 
     * @ORM\OneToMany(targetEntity="HopAddition", mappedBy="batch", cascade={"persist"})
     *
     * @var Doctrine\Common\Collections\Collection
     */
    private $hopAdditions;
    
    
    /**
     * 
     * @ORM\OneToMany(targetEntity="GrainAddition", mappedBy="batch", cascade={"persist"})
     *
     * @var Doctrine\Common\Collections\Collection
     */
    private $grainAdditions;
    
    /**
     * 
     * @ORM\OneToMany(targetEntity="ExtractAddition", mappedBy="batch", cascade={"persist"})
     *
     * @var Doctrine\Common\Collections\Collection
     */
    private $extractAdditions;
    
    /**
     * 
     * @ORM\OneToMany(targetEntity="AdjunctAddition", mappedBy="batch", cascade={"persist"})
     *
     * @var Doctrine\Common\Collections\Collection
     */
    private $adjunctAdditions;
    
    /**
     * 
     * @ORM\OneToMany(targetEntity="MiscAddition", mappedBy="batch", cascade={"persist"})
     *
     * @var Doctrine\Common\Collections\Collection
     */
    private $miscAdditions;
    
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
     * Set brewname
     *
     * @param string $brewname
     * @return Brewing
     */
    public function setName($brewname)
    {
        $this->brewname = $brewname;
    
        return $this;
    }

    /**
     * Get brewname
     *
     * @return string 
     */
    public function getName()
    {
        return $this->brewname;
    }

    /**
     * Set brewstyle
     *
     * @param string $brewstyle
     * @return Brewing
     */
    public function setStyle($brewstyle)
    {
        $this->brewstyle = $brewstyle;
    
        return $this;
    }

    /**
     * Get brewstyle
     *
     * @return string 
     */
    public function getStyle()
    {
        return $this->brewstyle;
    }

    /**
     * Set brewbatchnum
     *
     * @param string $brewbatchnum
     * @return Brewing
     */
    public function setBatchNum($brewbatchnum)
    {
        $this->brewbatchnum = $brewbatchnum;
    
        return $this;
    }

    /**
     * Get brewbatchnum
     *
     * @return string 
     */
    public function getBatchNum()
    {
        return $this->brewbatchnum;
    }

    /**
     * Set brewcondition
     *
     * @param string $brewcondition
     * @return Brewing
     */
    public function setCondition($brewcondition)
    {
        $this->brewcondition = $brewcondition;
    
        return $this;
    }

    /**
     * Get brewcondition
     *
     * @return string 
     */
    public function getCondition()
    {
        return $this->brewcondition;
    }

    /**
     * Set brewdate
     *
     * @param \DateTime $brewdate
     * @return Brewing
     */
    public function setDate($brewdate)
    {
        $this->brewdate = $brewdate;
    
        return $this;
    }

    /**
     * Get brewdate
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->brewdate;
    }

    /**
     * Set brewyield
     *
     * @param string $brewyield
     * @return Brewing
     */
    public function setYield($brewyield)
    {
        $this->brewyield = $brewyield;
    
        return $this;
    }

    /**
     * Get brewyield
     *
     * @return string 
     */
    public function getYield()
    {
        return $this->brewyield;
    }

    /**
     * Set brewmethod
     *
     * @param string $brewmethod
     * @return Brewing
     */
    public function setMethod($brewmethod)
    {
        $this->brewmethod = $brewmethod;
    
        return $this;
    }

    /**
     * Get brewmethod
     *
     * @return string 
     */
    public function getMethod()
    {
        return $this->brewmethod;
    }

    /**
     * Set brewcost
     *
     * @param string $brewcost
     * @return Brewing
     */
    public function setCost($brewcost)
    {
        $this->brewcost = $brewcost;
    
        return $this;
    }

    /**
     * Get brewcost
     *
     * @return string 
     */
    public function getCost()
    {
        return $this->brewcost;
    }

    /**
     * Set brewlink1
     *
     * @param string $brewlink1
     * @return Brewing
     */
    public function setLink1($brewlink1)
    {
        $this->brewlink1 = $brewlink1;
    
        return $this;
    }

    /**
     * Get brewlink1
     *
     * @return string 
     */
    public function getLink1()
    {
        return $this->brewlink1;
    }

    /**
     * Set brewlink1name
     *
     * @param string $brewlink1name
     * @return Brewing
     */
    public function setLink1Name($brewlink1name)
    {
        $this->brewlink1name = $brewlink1name;
    
        return $this;
    }

    /**
     * Get brewlink1name
     *
     * @return string 
     */
    public function getLink1Name()
    {
        return $this->brewlink1name;
    }

    /**
     * Set brewlink2
     *
     * @param string $brewlink2
     * @return Brewing
     */
    public function setLink2($brewlink2)
    {
        $this->brewlink2 = $brewlink2;
    
        return $this;
    }

    /**
     * Get brewlink2
     *
     * @return string 
     */
    public function getLink2()
    {
        return $this->brewlink2;
    }

    /**
     * Set brewlink2name
     *
     * @param string $brewlink2name
     * @return Brewing
     */
    public function setLink2Name($brewlink2name)
    {
        $this->brewlink2name = $brewlink2name;
    
        return $this;
    }

    /**
     * Get brewlink2name
     *
     * @return string 
     */
    public function getLink2Name()
    {
        return $this->brewlink2name;
    }

    /**
     * Set brewinfo
     *
     * @param string $brewinfo
     * @return Brewing
     */
    public function setInfo($brewinfo)
    {
        $this->brewinfo = $brewinfo;
    
        return $this;
    }

    /**
     * Get brewinfo
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->brewinfo;
    }

    /**
     * Set brewyeastamount
     *
     * @param string $brewyeastamount
     * @return Brewing
     */
    public function setYeastAmount($brewyeastamount)
    {
        $this->brewyeastamount = $brewyeastamount;
    
        return $this;
    }

    /**
     * Get brewyeastamount
     *
     * @return string 
     */
    public function getYeastAmount()
    {
        return $this->brewyeastamount;
    }

    /**
     * Set brewlabelimage
     *
     * @param string $brewlabelimage
     * @return Brewing
     */
    public function setLabelImage($brewlabelimage)
    {
        $this->brewlabelimage = $brewlabelimage;
    
        return $this;
    }

    /**
     * Get brewlabelimage
     *
     * @return string 
     */
    public function getLabelImage()
    {
        return $this->brewlabelimage;
    }

    /**
     * Set brewog
     *
     * @param string $brewog
     * @return Brewing
     */
    public function setOG($brewog)
    {
        $this->brewog = $brewog;
    
        return $this;
    }

    /**
     * Get brewog
     *
     * @return string 
     */
    public function getOG()
    {
        return $this->brewog;
    }

    /**
     * Set brewfg
     *
     * @param string $brewfg
     * @return Brewing
     */
    public function setFG($brewfg)
    {
        $this->brewfg = $brewfg;
    
        return $this;
    }

    /**
     * Get brewfg
     *
     * @return string 
     */
    public function getFG()
    {
        return $this->brewfg;
    }

    /**
     * Set brewgravity1
     *
     * @param string $brewgravity1
     * @return Brewing
     */
    public function setGravity1($brewgravity1)
    {
        $this->brewgravity1 = $brewgravity1;
    
        return $this;
    }

    /**
     * Get brewgravity1
     *
     * @return string 
     */
    public function getGravity1()
    {
        return $this->brewgravity1;
    }

    /**
     * Set brewgravity1days
     *
     * @param string $brewgravity1days
     * @return Brewing
     */
    public function setGravity1Days($brewgravity1days)
    {
        $this->brewgravity1days = $brewgravity1days;
    
        return $this;
    }

    /**
     * Get brewgravity1days
     *
     * @return string 
     */
    public function getGravity1Days()
    {
        return $this->brewgravity1days;
    }

    /**
     * Set brewgravity2
     *
     * @param string $brewgravity2
     * @return Brewing
     */
    public function setGravity2($brewgravity2)
    {
        $this->brewgravity2 = $brewgravity2;
    
        return $this;
    }

    /**
     * Get brewgravity2
     *
     * @return string 
     */
    public function getGravity2()
    {
        return $this->brewgravity2;
    }

    /**
     * Set brewgravity2days
     *
     * @param string $brewgravity2days
     * @return Brewing
     */
    public function setGravity2Days($brewgravity2days)
    {
        $this->brewgravity2days = $brewgravity2days;
    
        return $this;
    }

    /**
     * Get brewgravity2days
     *
     * @return string 
     */
    public function getGravity2Days()
    {
        return $this->brewgravity2days;
    }

    /**
     * Set brewprocedure
     *
     * @param string $brewprocedure
     * @return Brewing
     */
    public function setProcedure($brewprocedure)
    {
        $this->brewprocedure = $brewprocedure;
    
        return $this;
    }

    /**
     * Get brewprocedure
     *
     * @return string 
     */
    public function getProcedure()
    {
        return $this->brewprocedure;
    }

    /**
     * Set brewspecialprocedure
     *
     * @param string $brewspecialprocedure
     * @return Brewing
     */
    public function setSpecialProcedure($brewspecialprocedure)
    {
        $this->brewspecialprocedure = $brewspecialprocedure;
    
        return $this;
    }

    /**
     * Get brewspecialprocedure
     *
     * @return string 
     */
    public function getSpecialProcedure()
    {
        return $this->brewspecialprocedure;
    }

    /**
     * Set brewprimary
     *
     * @param string $brewprimary
     * @return Brewing
     */
    public function setPrimaryDays($brewprimary)
    {
        $this->brewprimary = $brewprimary;
    
        return $this;
    }

    /**
     * Get brewprimary
     *
     * @return string 
     */
    public function getPrimaryDays()
    {
        return $this->brewprimary;
    }

    /**
     * Set brewprimarytemp
     *
     * @param string $brewprimarytemp
     * @return Brewing
     */
    public function setPrimaryTemp($brewprimarytemp)
    {
        $this->brewprimarytemp = $brewprimarytemp;
    
        return $this;
    }

    /**
     * Get brewprimarytemp
     *
     * @return string 
     */
    public function getPrimaryTemp()
    {
        return $this->brewprimarytemp;
    }

    /**
     * Set brewsecondary
     *
     * @param string $brewsecondary
     * @return Brewing
     */
    public function setSecondaryDays($brewsecondary)
    {
        $this->brewsecondary = $brewsecondary;
    
        return $this;
    }

    /**
     * Get brewsecondary
     *
     * @return string 
     */
    public function getSecondaryDays()
    {
        return $this->brewsecondary;
    }

    /**
     * Set brewsecondarytemp
     *
     * @param string $brewsecondarytemp
     * @return Brewing
     */
    public function setSecondaryTemp($brewsecondarytemp)
    {
        $this->brewsecondarytemp = $brewsecondarytemp;
    
        return $this;
    }

    /**
     * Get brewsecondarytemp
     *
     * @return string 
     */
    public function getSecondaryTemp()
    {
        return $this->brewsecondarytemp;
    }

    /**
     * Set brewtertiary
     *
     * @param string $brewtertiary
     * @return Brewing
     */
    public function setTertiaryDays($brewtertiary)
    {
        $this->brewtertiary = $brewtertiary;
    
        return $this;
    }

    /**
     * Get brewtertiary
     *
     * @return string 
     */
    public function getTertiaryDays()
    {
        return $this->brewtertiary;
    }

    /**
     * Set brewtertiarytemp
     *
     * @param string $brewtertiarytemp
     * @return Brewing
     */
    public function setTertiaryTemp($brewtertiarytemp)
    {
        $this->brewtertiarytemp = $brewtertiarytemp;
    
        return $this;
    }

    /**
     * Get brewtertiarytemp
     *
     * @return string 
     */
    public function getTertiaryTemp()
    {
        return $this->brewtertiarytemp;
    }

    /**
     * Set brewlager
     *
     * @param string $brewlager
     * @return Brewing
     */
    public function setLagerDays($brewlager)
    {
        $this->brewlager = $brewlager;
    
        return $this;
    }

    /**
     * Get brewlager
     *
     * @return string 
     */
    public function getLagerDays()
    {
        return $this->brewlager;
    }

    /**
     * Set brewlagertemp
     *
     * @param string $brewlagertemp
     * @return Brewing
     */
    public function setLagerTemp($brewlagertemp)
    {
        $this->brewlagertemp = $brewlagertemp;
    
        return $this;
    }

    /**
     * Get brewlagertemp
     *
     * @return string 
     */
    public function getLagerTemp()
    {
        return $this->brewlagertemp;
    }

    /**
     * Set brewage
     *
     * @param string $brewage
     * @return Brewing
     */
    public function setAgeDays($brewage)
    {
        $this->brewage = $brewage;
    
        return $this;
    }

    /**
     * Get brewage
     *
     * @return string 
     */
    public function getAgeDays()
    {
        return $this->brewage;
    }

    /**
     * Set brewagetemp
     *
     * @param string $brewagetemp
     * @return Brewing
     */
    public function setAgeTemp($brewagetemp)
    {
        $this->brewagetemp = $brewagetemp;
    
        return $this;
    }

    /**
     * Get brewagetemp
     *
     * @return string 
     */
    public function getAgeTemp()
    {
        return $this->brewagetemp;
    }

    /**
     * Set brewbitterness
     *
     * @param float $brewbitterness
     * @return Brewing
     */
    public function setBitterness($brewbitterness)
    {
        $this->brewbitterness = $brewbitterness;
    
        return $this;
    }

    /**
     * Get brewbitterness
     *
     * @return float 
     */
    public function getBitterness()
    {
        return $this->brewbitterness;
    }

    /**
     * Set brewibuformula
     *
     * @param string $brewibuformula
     * @return Brewing
     */
    public function setIBUFormula($brewibuformula)
    {
        $this->brewibuformula = $brewibuformula;
    
        return $this;
    }

    /**
     * Get brewibuformula
     *
     * @return string 
     */
    public function getIBUFormula()
    {
        return $this->brewibuformula;
    }

    /**
     * Set brewlovibond
     *
     * @param float $brewlovibond
     * @return Brewing
     */
    public function setLovibond($brewlovibond)
    {
        $this->brewlovibond = $brewlovibond;
    
        return $this;
    }

    /**
     * Get brewlovibond
     *
     * @return float 
     */
    public function getLovibond()
    {
        return $this->brewlovibond;
    }

    /**
     * Set brewcolorformula
     *
     * @param string $brewcolorformula
     * @return Brewing
     */
    public function setColorFormula($brewcolorformula)
    {
        $this->brewcolorformula = $brewcolorformula;
    
        return $this;
    }

    /**
     * Get brewcolorformula
     *
     * @return string 
     */
    public function getColorFormula()
    {
        return $this->brewcolorformula;
    }

    /**
     * Set brewcomments
     *
     * @param string $brewcomments
     * @return Brewing
     */
    public function setComments($brewcomments)
    {
        $this->brewcomments = $brewcomments;
    
        return $this;
    }

    /**
     * Get brewcomments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->brewcomments;
    }

    /**
     * Set brewmashtype
     *
     * @param string $brewmashtype
     * @return Brewing
     */
    public function setMashType($brewmashtype)
    {
        $this->brewmashtype = $brewmashtype;
    
        return $this;
    }

    /**
     * Get brewmashtype
     *
     * @return string 
     */
    public function getMashType()
    {
        return $this->brewmashtype;
    }

    /**
     * Set brewmashgrainweight
     *
     * @param string $brewmashgrainweight
     * @return Brewing
     */
    public function setMashGrainWeight($brewmashgrainweight)
    {
        $this->brewmashgrainweight = $brewmashgrainweight;
    
        return $this;
    }

    /**
     * Get brewmashgrainweight
     *
     * @return string 
     */
    public function getMashGrainWeight()
    {
        return $this->brewmashgrainweight;
    }

    /**
     * Set brewmashspargamt
     *
     * @param string $brewmashspargamt
     * @return Brewing
     */
    public function setMashSpargeAmt($brewmashspargamt)
    {
        $this->brewmashspargamt = $brewmashspargamt;
    
        return $this;
    }

    /**
     * Get brewmashspargamt
     *
     * @return string 
     */
    public function getMashSpargeAmt()
    {
        return $this->brewmashspargamt;
    }

    /**
     * Set brewefficiency
     *
     * @param string $brewefficiency
     * @return Brewing
     */
    public function setEfficiency($brewefficiency)
    {
        $this->brewefficiency = $brewefficiency;
    
        return $this;
    }

    /**
     * Get brewefficiency
     *
     * @return string 
     */
    public function getEfficiency()
    {
        return $this->brewefficiency;
    }

    /**
     * Set brewppg
     *
     * @param string $brewppg
     * @return Brewing
     */
    public function setPPG($brewppg)
    {
        $this->brewppg = $brewppg;
    
        return $this;
    }

    /**
     * Get brewppg
     *
     * @return string 
     */
    public function getPPG()
    {
        return $this->brewppg;
    }

    /**
     * Set brewstatus
     *
     * @param string $brewstatus
     * @return Brewing
     */
    public function setStatus($brewstatus)
    {
        $this->brewstatus = $brewstatus;
    
        return $this;
    }

    /**
     * Get brewstatus
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->brewstatus;
    }

    /**
     * Set brewtapdate
     *
     * @param \DateTime $brewtapdate
     * @return Brewing
     */
    public function setTapDate($brewtapdate)
    {
        $this->brewtapdate = $brewtapdate;
    
        return $this;
    }

    /**
     * Get brewtapdate
     *
     * @return \DateTime 
     */
    public function getTapDate()
    {
        return $this->brewtapdate;
    }

    /**
     * Set brewmashgravity
     *
     * @param string $brewmashgravity
     * @return Brewing
     */
    public function setMashGravity($brewmashgravity)
    {
        $this->brewmashgravity = $brewmashgravity;
    
        return $this;
    }

    /**
     * Get brewmashgravity
     *
     * @return string 
     */
    public function getMashGravity()
    {
        return $this->brewmashgravity;
    }

    /**
     * Set brewpreboilamt
     *
     * @param string $brewpreboilamt
     * @return Brewing
     */
    public function setPreBoilAmt($brewpreboilamt)
    {
        $this->brewpreboilamt = $brewpreboilamt;
    
        return $this;
    }

    /**
     * Get brewpreboilamt
     *
     * @return string 
     */
    public function getPreBoilAmt()
    {
        return $this->brewpreboilamt;
    }

    /**
     * Set brewbrewerid
     *
     * @param string $brewbrewerid
     * @return Brewing
     */
    public function setBrewerId($brewbrewerid)
    {
        $this->brewbrewerid = $brewbrewerid;
    
        return $this;
    }

    /**
     * Get brewbrewerid
     *
     * @return string 
     */
    public function getBrewerId()
    {
        return $this->brewbrewerid;
    }

    /**
     * Set brewtargetog
     *
     * @param string $brewtargetog
     * @return Brewing
     */
    public function setTargetOG($brewtargetog)
    {
        $this->brewtargetog = $brewtargetog;
    
        return $this;
    }

    /**
     * Get brewtargetog
     *
     * @return string 
     */
    public function getTargetOG()
    {
        return $this->brewtargetog;
    }

    /**
     * Set brewtargetfg
     *
     * @param string $brewtargetfg
     * @return Brewing
     */
    public function setTargetFG($brewtargetfg)
    {
        $this->brewtargetfg = $brewtargetfg;
    
        return $this;
    }

    /**
     * Get brewtargetfg
     *
     * @return string 
     */
    public function getTargetFG()
    {
        return $this->brewtargetfg;
    }

    /**
     * Set brewboiltime
     *
     * @param integer $brewboiltime
     * @return Brewing
     */
    public function setBoilTime($brewboiltime)
    {
        $this->brewboiltime = $brewboiltime;
    
        return $this;
    }

    /**
     * Get brewboiltime
     *
     * @return integer 
     */
    public function getBoilTime()
    {
        return $this->brewboiltime;
    }

    /**
     * Set brewfeatured
     *
     * @param string $brewfeatured
     * @return Brewing
     */
    public function setFeatured($brewfeatured)
    {
        $this->brewfeatured = $brewfeatured;
    
        return $this;
    }

    /**
     * Get brewfeatured
     *
     * @return string 
     */
    public function getFeatured()
    {
        return $this->brewfeatured;
    }

    /**
     * Set brewwaterratio
     *
     * @param string $brewwaterratio
     * @return Brewing
     */
    public function setWaterRatio($brewwaterratio)
    {
        $this->brewwaterratio = $brewwaterratio;
    
        return $this;
    }

    /**
     * Get brewwaterratio
     *
     * @return string 
     */
    public function getWaterRatio()
    {
        return $this->brewwaterratio;
    }

    /**
     * Set brewarchive
     *
     * @param string $brewarchive
     * @return Brewing
     */
    public function setArchive($brewarchive)
    {
        $this->brewarchive = $brewarchive;
    
        return $this;
    }

    /**
     * Get brewarchive
     *
     * @return string 
     */
    public function getArchive()
    {
        return $this->brewarchive;
    }
    
    /**
     * The BU/GU ratio for the recipe
     * 
     * This is typically used to figure out apparent bitterness
     * 
     * @return float
     */
    public function getBUGU()
    {
        if ($this->brewog == 1) {
            return null;
        }
        return round($this->brewbitterness/(($this->brewog - 1) * 1000), 2);
    }
    
    /**
     * Calculates calories for this recipe
     * 
     * @return int
     */
    public function getCalories()
    {
        $abw = $this->getABW();
        $extract = $this->getRealExtract();
        return round((6.9 * $abw + 4.0 * ($extract - 0.1)) * $this->brewfg * 3.55, 0);
    }
    
    /**
     * Calculates the alcohol by weight for this recipe
     * 
     * @return float
     */
    public function getABW()
    {
        return round((((($this->brewog - $this->brewfg) / .75) * 100) * .78), 1);
    }
    
    /**
     * Calculates the alcohol by volume for this recipe
     * 
     * @return float
     */
    public function getABV()
    {
        return round((($this->brewog - $this->brewfg) / .75) * 100, 1);
    }
    
    /**
     * I have no idea what real extract is, or what it does.
     * 
     * @todo Figure out what it means
     * @return float
     */
    public function getRealExtract()
    {
         return round((0.1808 * $this->convertGravityToPlato($this->brewog)) + 
                      (0.8192 * $this->convertGravityToPlato($this->brewfg)), 1);
    }
    
    /**
     * Converts specific gravity to degrees Plato
     * 
     * @todo put this somewhere better
     * @param float $gravity
     * @return float
     */
    public function convertGravityToPlato($gravity)
    {
        return round((-463.37) + 
                     (668.72 * $gravity) - 
                     (205.35 * pow($gravity, 2)), 1);
    }
    
    /**
     * Calculates the apparent attenuation of the batch
     * 
     * @return float
     */
    public function getApparentAttenuation()
    {
        return round((1 - ($this->convertGravityToPlato($this->brewfg) / $this->convertGravityToPlato($this->brewog))) * 100, 1);
    }
    
    /**
     * Calculates the real attenuation of the batch
     * 
     * @return float
     */
    public function getRealAttenuation()
    {
        return round((1 - ($this->getRealExtract() / $this->convertGravityToPlato($this->brewog))) * 100,1);
    }

    /**
     * Returns an array of ExtractAddtions
     * 
     * @return Doctrine\Common\Collections\Collection
     */
    public function getExtracts()
    {
        if (!isset($this->extractAdditions)) {
            $this->extractAdditions = new ArrayCollection();
        }
        return $this->extractAdditions;
    }
    
    /**
     * Returns an array of Grains
     * 
     * @return Doctrine\Common\Collections\Collection
     */
    public function getGrains()
    {
        if (!isset($this->grainAdditions)) {
            $this->grainAdditions = new ArrayCollection();
        }
        return $this->grainAdditions;
    }
    
    /**
     * Returns the total weight of the grains
     * 
     * @return float
     */
    public function getTotalGrainWeight()
    {
        $weight = 0.0;
        foreach ($this->grainAdditions as $grain) {
            $weight += $grain->getWeight();
        }
        return $weight;
    }
    
    /**
     * Collects the fermentable adjuncts for the boil
     * 
     * @return Doctrine\Common\Collections\Collection
     */
    public function getAdjuncts()
    {
        if (!isset($this->adjunctAdditions)) {
            $this->adjunctAdditions = new ArrayCollection();
        }
        return $this->adjunctAdditions;
    }
    
    /**
     * Collects the non-fermentable adjuncts for the boil
     * 
     * @return Doctrine\Common\Collections\Collection
     */
    public function getMiscIngredients()
    {
        if (!isset($this->miscAdditions)) {
            $this->miscAdditions = new ArrayCollection();
        }
        return $this->miscAdditions;        
    }
    
    /**
     * The grains
     * 
     * @return Doctrine\Common\Collections\Collection
     */   
    public function getGrainAdditions()
    {
        if (!isset($this->grainAdditions)) {
            $this->grainAdditions = new ArrayCollection();
        }
        return $this->grainAdditions;
    }
    
    /**
     * Collects the non-fermentable adjuncts for the boil
     * 
     * @return Doctrine\Common\Collections\Collection
     */
    public function getHops()
    {
        if (!isset($this->hopAdditions)) {
            $this->hopAdditions = new ArrayCollection();
        }
        return $this->hopAdditions;
    }
    
    /**
     * For displaying the total
     * 
     * @return array
     */
    public function getTotalHops()
    {
        $total = array("Weight" => 0, 
                       "AAU"    => 0);
        $hops = $this->getHops();

        foreach ($hops as $hop) {
            $total['Weight'] += $hop->getWeight();
            $total['AAU']    += $hop->getAAU();
        }
        return $total;        
    }
    
    /**
     * 
     * @return YeastProfiles
     */
    public function getYeastProfile()
    {
        return $this->yeastProfile;
    }

    /**
     * 
     * @return EquipProfiles
     */
    public function getEquipmentProfile()
    {
        return $this->equipmentProfile;
    }

    /**
     * 
     * @return MashProfiles
     */
    public function getMashProfile()
    {
        return $this->mashProfile;
    }
    
    /**
     * 
     * @return WaterProfiles
     */
    public function getWaterProfile()
    {
        return $this->waterProfile;
    }

}