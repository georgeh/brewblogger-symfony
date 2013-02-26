<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reviews
 *
 * @ORM\Table(name="reviews")
 * @ORM\Entity
 */
class Reviews
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
     * @var boolean
     *
     * @ORM\Column(name="brewID", type="boolean", nullable=true)
     */
    private $brewid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="brewScoreDate", type="date", nullable=true)
     */
    private $brewscoredate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="brewAromaScore", type="boolean", nullable=true)
     */
    private $brewaromascore;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAromaInfo", type="text", nullable=true)
     */
    private $brewaromainfo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="brewAppearanceScore", type="boolean", nullable=true)
     */
    private $brewappearancescore;

    /**
     * @var string
     *
     * @ORM\Column(name="brewAppearanceInfo", type="text", nullable=true)
     */
    private $brewappearanceinfo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="brewFlavorScore", type="boolean", nullable=true)
     */
    private $brewflavorscore;

    /**
     * @var string
     *
     * @ORM\Column(name="brewFlavorInfo", type="text", nullable=true)
     */
    private $brewflavorinfo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="brewMouthfeelScore", type="boolean", nullable=true)
     */
    private $brewmouthfeelscore;

    /**
     * @var string
     *
     * @ORM\Column(name="brewMouthfeelInfo", type="text", nullable=true)
     */
    private $brewmouthfeelinfo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="brewOverallScore", type="boolean", nullable=true)
     */
    private $brewoverallscore;

    /**
     * @var string
     *
     * @ORM\Column(name="brewOverallInfo", type="text", nullable=true)
     */
    private $brewoverallinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="brewScoredBy", type="string", length=250, nullable=true)
     */
    private $brewscoredby;

    /**
     * @var string
     *
     * @ORM\Column(name="brewBrewerID", type="string", length=255, nullable=true)
     */
    private $brewbrewerid;

    /**
     * @var string
     *
     * @ORM\Column(name="brewScorerLevel", type="string", length=255, nullable=true)
     */
    private $brewscorerlevel;



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
     * Set brewid
     *
     * @param boolean $brewid
     * @return Reviews
     */
    public function setBrewID($brewid)
    {
        $this->brewid = $brewid;
    
        return $this;
    }

    /**
     * Get brewid
     *
     * @return boolean 
     */
    public function getBrewID()
    {
        return $this->brewid;
    }

    /**
     * Set brewscoredate
     *
     * @param \DateTime $brewscoredate
     * @return Reviews
     */
    public function setScoreDate($brewscoredate)
    {
        $this->brewscoredate = $brewscoredate;
    
        return $this;
    }

    /**
     * Get brewscoredate
     *
     * @return \DateTime 
     */
    public function getScoreDate()
    {
        return $this->brewscoredate;
    }

    /**
     * Set brewaromascore
     *
     * @param boolean $brewaromascore
     * @return Reviews
     */
    public function setAromaScore($brewaromascore)
    {
        $this->brewaromascore = $brewaromascore;
    
        return $this;
    }

    /**
     * Get brewaromascore
     *
     * @return boolean 
     */
    public function getAromaScore()
    {
        return $this->brewaromascore;
    }

    /**
     * Set brewaromainfo
     *
     * @param string $brewaromainfo
     * @return Reviews
     */
    public function setAromaInfo($brewaromainfo)
    {
        $this->brewaromainfo = $brewaromainfo;
    
        return $this;
    }

    /**
     * Get brewaromainfo
     *
     * @return string 
     */
    public function getAromaInfo()
    {
        return $this->brewaromainfo;
    }

    /**
     * Set brewappearancescore
     *
     * @param boolean $brewappearancescore
     * @return Reviews
     */
    public function setAppearanceScore($brewappearancescore)
    {
        $this->brewappearancescore = $brewappearancescore;
    
        return $this;
    }

    /**
     * Get brewappearancescore
     *
     * @return boolean 
     */
    public function getAppearanceScore()
    {
        return $this->brewappearancescore;
    }

    /**
     * Set brewappearanceinfo
     *
     * @param string $brewappearanceinfo
     * @return Reviews
     */
    public function setAppearanceInfo($brewappearanceinfo)
    {
        $this->brewappearanceinfo = $brewappearanceinfo;
    
        return $this;
    }

    /**
     * Get brewappearanceinfo
     *
     * @return string 
     */
    public function getAppearanceInfo()
    {
        return $this->brewappearanceinfo;
    }

    /**
     * Set brewflavorscore
     *
     * @param boolean $brewflavorscore
     * @return Reviews
     */
    public function setFlavorScore($brewflavorscore)
    {
        $this->brewflavorscore = $brewflavorscore;
    
        return $this;
    }

    /**
     * Get brewflavorscore
     *
     * @return boolean 
     */
    public function getFlavorScore()
    {
        return $this->brewflavorscore;
    }

    /**
     * Set brewflavorinfo
     *
     * @param string $brewflavorinfo
     * @return Reviews
     */
    public function setFlavorInfo($brewflavorinfo)
    {
        $this->brewflavorinfo = $brewflavorinfo;
    
        return $this;
    }

    /**
     * Get brewflavorinfo
     *
     * @return string 
     */
    public function getFlavorInfo()
    {
        return $this->brewflavorinfo;
    }

    /**
     * Set brewmouthfeelscore
     *
     * @param boolean $brewmouthfeelscore
     * @return Reviews
     */
    public function setMouthfeelScore($brewmouthfeelscore)
    {
        $this->brewmouthfeelscore = $brewmouthfeelscore;
    
        return $this;
    }

    /**
     * Get brewmouthfeelscore
     *
     * @return boolean 
     */
    public function getMouthfeelScore()
    {
        return $this->brewmouthfeelscore;
    }

    /**
     * Set brewmouthfeelinfo
     *
     * @param string $brewmouthfeelinfo
     * @return Reviews
     */
    public function setMouthfeelInfo($brewmouthfeelinfo)
    {
        $this->brewmouthfeelinfo = $brewmouthfeelinfo;
    
        return $this;
    }

    /**
     * Get brewmouthfeelinfo
     *
     * @return string 
     */
    public function getMouthfeelInfo()
    {
        return $this->brewmouthfeelinfo;
    }

    /**
     * Set brewoverallscore
     *
     * @param boolean $brewoverallscore
     * @return Reviews
     */
    public function setOverallScore($brewoverallscore)
    {
        $this->brewoverallscore = $brewoverallscore;
    
        return $this;
    }

    /**
     * Get brewoverallscore
     *
     * @return boolean 
     */
    public function getOverallScore()
    {
        return $this->brewoverallscore;
    }

    /**
     * Set brewoverallinfo
     *
     * @param string $brewoverallinfo
     * @return Reviews
     */
    public function setOverallInfo($brewoverallinfo)
    {
        $this->brewoverallinfo = $brewoverallinfo;
    
        return $this;
    }

    /**
     * Get brewoverallinfo
     *
     * @return string 
     */
    public function getOverallInfo()
    {
        return $this->brewoverallinfo;
    }

    /**
     * Set brewscoredby
     *
     * @param string $brewscoredby
     * @return Reviews
     */
    public function setScoredBy($brewscoredby)
    {
        $this->brewscoredby = $brewscoredby;
    
        return $this;
    }

    /**
     * Get brewscoredby
     *
     * @return string 
     */
    public function getScoredBy()
    {
        return $this->brewscoredby;
    }

    /**
     * Set brewbrewerid
     *
     * @param string $brewbrewerid
     * @return Reviews
     */
    public function setBrewerID($brewbrewerid)
    {
        $this->brewbrewerid = $brewbrewerid;
    
        return $this;
    }

    /**
     * Get brewbrewerid
     *
     * @return string 
     */
    public function getBrewerID()
    {
        return $this->brewbrewerid;
    }

    /**
     * Set brewscorerlevel
     *
     * @param string $brewscorerlevel
     * @return Reviews
     */
    public function setScorerLevel($brewscorerlevel)
    {
        $this->brewscorerlevel = $brewscorerlevel;
    
        return $this;
    }

    /**
     * Get brewscorerlevel
     *
     * @return string 
     */
    public function getScorerLevel()
    {
        return $this->brewscorerlevel;
    }
}