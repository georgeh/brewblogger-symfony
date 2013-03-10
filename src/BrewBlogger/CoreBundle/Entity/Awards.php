<?php

namespace BrewBlogger\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Awards
 *
 * @ORM\Table(name="awards")
 * @ORM\Entity
 */
class Awards
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
     * @ORM\Column(name="awardBrewID", type="string", length=10, nullable=true)
     */
    private $awardbrewid;

    /**
     * @var string
     *
     * @ORM\Column(name="awardContest", type="string", length=250, nullable=true)
     */
    private $awardcontest;

    /**
     * @var string
     *
     * @ORM\Column(name="awardContestURL", type="string", length=250, nullable=true)
     */
    private $awardcontesturl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="awardDate", type="date", nullable=true)
     */
    private $awarddate;

    /**
     * @var string
     *
     * @ORM\Column(name="awardStyle", type="string", length=250, nullable=true)
     */
    private $awardstyle;

    /**
     * @var string
     *
     * @ORM\Column(name="awardPlace", type="string", length=250, nullable=true)
     */
    private $awardplace;

    /**
     * @var string
     *
     * @ORM\Column(name="brewBrewerID", type="string", length=250, nullable=true)
     */
    private $brewbrewerid;

    /**
     * @var string
     *
     * @ORM\Column(name="awardBrewName", type="string", length=250, nullable=true)
     */
    private $awardbrewname;



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
     * Set awardbrewid
     *
     * @param string $awardbrewid
     * @return Awards
     */
    public function setBrewID($awardbrewid)
    {
        $this->awardbrewid = $awardbrewid;
    
        return $this;
    }

    /**
     * Get awardbrewid
     *
     * @return string 
     */
    public function getBrewID()
    {
        return $this->awardbrewid;
    }

    /**
     * Set awardcontest
     *
     * @param string $awardcontest
     * @return Awards
     */
    public function setContest($awardcontest)
    {
        $this->awardcontest = $awardcontest;
    
        return $this;
    }

    /**
     * Get awardcontest
     *
     * @return string 
     */
    public function getContest()
    {
        return $this->awardcontest;
    }

    /**
     * Set awardcontesturl
     *
     * @param string $awardcontesturl
     * @return Awards
     */
    public function setContestURL($awardcontesturl)
    {
        $this->awardcontesturl = $awardcontesturl;
    
        return $this;
    }

    /**
     * Get awardcontesturl
     *
     * @return string 
     */
    public function getContestURL()
    {
        return $this->awardcontesturl;
    }

    /**
     * Set awarddate
     *
     * @param \DateTime $awarddate
     * @return Awards
     */
    public function setDate($awarddate)
    {
        $this->awarddate = $awarddate;
    
        return $this;
    }

    /**
     * Get awarddate
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->awarddate;
    }

    /**
     * Set awardstyle
     *
     * @param string $awardstyle
     * @return Awards
     */
    public function setStyle($awardstyle)
    {
        $this->awardstyle = $awardstyle;
    
        return $this;
    }

    /**
     * Get awardstyle
     *
     * @return string 
     */
    public function getStyle()
    {
        return $this->awardstyle;
    }

    /**
     * Set awardplace
     *
     * @param string $awardplace
     * @return Awards
     */
    public function setPlace($awardplace)
    {
        $this->awardplace = $awardplace;
    
        return $this;
    }

    /**
     * Get awardplace
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->awardplace;
    }

    /**
     * Set brewbrewerid
     *
     * @param string $brewbrewerid
     * @return Awards
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
     * Set awardbrewname
     *
     * @param string $awardbrewname
     * @return Awards
     */
    public function setBrewName($awardbrewname)
    {
        $this->awardbrewname = $awardbrewname;
    
        return $this;
    }

    /**
     * Get awardbrewname
     *
     * @return string 
     */
    public function getBrewName()
    {
        return $this->awardbrewname;
    }
}