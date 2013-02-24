<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MashSteps
 *
 * @ORM\Table(name="mash_steps")
 * @ORM\Entity
 */
class MashSteps
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
     * @var integer
     *
     * @ORM\Column(name="stepMashProfileID", type="integer", nullable=true)
     */
    private $stepmashprofileid;

    /**
     * @var string
     *
     * @ORM\Column(name="stepName", type="string", length=255, nullable=true)
     */
    private $stepname;

    /**
     * @var integer
     *
     * @ORM\Column(name="stepNumber", type="integer", nullable=true)
     */
    private $stepnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="stepType", type="string", length=255, nullable=true)
     */
    private $steptype;

    /**
     * @var string
     *
     * @ORM\Column(name="stepTime", type="string", length=255, nullable=true)
     */
    private $steptime;

    /**
     * @var string
     *
     * @ORM\Column(name="stepTemp", type="string", length=255, nullable=true)
     */
    private $steptemp;

    /**
     * @var string
     *
     * @ORM\Column(name="stepRampTime", type="string", length=255, nullable=true)
     */
    private $stepramptime;

    /**
     * @var string
     *
     * @ORM\Column(name="stepEndTemp", type="string", length=255, nullable=true)
     */
    private $stependtemp;

    /**
     * @var string
     *
     * @ORM\Column(name="stepDescription", type="text", nullable=true)
     */
    private $stepdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="stepInfuseAmt", type="string", length=255, nullable=true)
     */
    private $stepinfuseamt;

    /**
     * @var string
     *
     * @ORM\Column(name="stepDecoctionAmt", type="string", length=255, nullable=true)
     */
    private $stepdecoctionamt;

    /**
     * @var string
     *
     * @ORM\Column(name="stepInfusionTemp", type="string", length=255, nullable=true)
     */
    private $stepinfusiontemp;



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
     * Set stepmashprofileid
     *
     * @param integer $stepmashprofileid
     * @return MashSteps
     */
    public function setStepmashprofileid($stepmashprofileid)
    {
        $this->stepmashprofileid = $stepmashprofileid;
    
        return $this;
    }

    /**
     * Get stepmashprofileid
     *
     * @return integer 
     */
    public function getStepmashprofileid()
    {
        return $this->stepmashprofileid;
    }

    /**
     * Set stepname
     *
     * @param string $stepname
     * @return MashSteps
     */
    public function setStepname($stepname)
    {
        $this->stepname = $stepname;
    
        return $this;
    }

    /**
     * Get stepname
     *
     * @return string 
     */
    public function getStepname()
    {
        return $this->stepname;
    }

    /**
     * Set stepnumber
     *
     * @param integer $stepnumber
     * @return MashSteps
     */
    public function setStepnumber($stepnumber)
    {
        $this->stepnumber = $stepnumber;
    
        return $this;
    }

    /**
     * Get stepnumber
     *
     * @return integer 
     */
    public function getStepnumber()
    {
        return $this->stepnumber;
    }

    /**
     * Set steptype
     *
     * @param string $steptype
     * @return MashSteps
     */
    public function setSteptype($steptype)
    {
        $this->steptype = $steptype;
    
        return $this;
    }

    /**
     * Get steptype
     *
     * @return string 
     */
    public function getSteptype()
    {
        return $this->steptype;
    }

    /**
     * Set steptime
     *
     * @param string $steptime
     * @return MashSteps
     */
    public function setSteptime($steptime)
    {
        $this->steptime = $steptime;
    
        return $this;
    }

    /**
     * Get steptime
     *
     * @return string 
     */
    public function getSteptime()
    {
        return $this->steptime;
    }

    /**
     * Set steptemp
     *
     * @param string $steptemp
     * @return MashSteps
     */
    public function setSteptemp($steptemp)
    {
        $this->steptemp = $steptemp;
    
        return $this;
    }

    /**
     * Get steptemp
     *
     * @return string 
     */
    public function getSteptemp()
    {
        return $this->steptemp;
    }

    /**
     * Set stepramptime
     *
     * @param string $stepramptime
     * @return MashSteps
     */
    public function setStepramptime($stepramptime)
    {
        $this->stepramptime = $stepramptime;
    
        return $this;
    }

    /**
     * Get stepramptime
     *
     * @return string 
     */
    public function getStepramptime()
    {
        return $this->stepramptime;
    }

    /**
     * Set stependtemp
     *
     * @param string $stependtemp
     * @return MashSteps
     */
    public function setStependtemp($stependtemp)
    {
        $this->stependtemp = $stependtemp;
    
        return $this;
    }

    /**
     * Get stependtemp
     *
     * @return string 
     */
    public function getStependtemp()
    {
        return $this->stependtemp;
    }

    /**
     * Set stepdescription
     *
     * @param string $stepdescription
     * @return MashSteps
     */
    public function setStepdescription($stepdescription)
    {
        $this->stepdescription = $stepdescription;
    
        return $this;
    }

    /**
     * Get stepdescription
     *
     * @return string 
     */
    public function getStepdescription()
    {
        return $this->stepdescription;
    }

    /**
     * Set stepinfuseamt
     *
     * @param string $stepinfuseamt
     * @return MashSteps
     */
    public function setStepinfuseamt($stepinfuseamt)
    {
        $this->stepinfuseamt = $stepinfuseamt;
    
        return $this;
    }

    /**
     * Get stepinfuseamt
     *
     * @return string 
     */
    public function getStepinfuseamt()
    {
        return $this->stepinfuseamt;
    }

    /**
     * Set stepdecoctionamt
     *
     * @param string $stepdecoctionamt
     * @return MashSteps
     */
    public function setStepdecoctionamt($stepdecoctionamt)
    {
        $this->stepdecoctionamt = $stepdecoctionamt;
    
        return $this;
    }

    /**
     * Get stepdecoctionamt
     *
     * @return string 
     */
    public function getStepdecoctionamt()
    {
        return $this->stepdecoctionamt;
    }

    /**
     * Set stepinfusiontemp
     *
     * @param string $stepinfusiontemp
     * @return MashSteps
     */
    public function setStepinfusiontemp($stepinfusiontemp)
    {
        $this->stepinfusiontemp = $stepinfusiontemp;
    
        return $this;
    }

    /**
     * Get stepinfusiontemp
     *
     * @return string 
     */
    public function getStepinfusiontemp()
    {
        return $this->stepinfusiontemp;
    }
}