<?php

namespace BrewBlogger\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brewer
 *
 * @ORM\Table(name="brewer")
 * @ORM\Entity
 */
class Brewer
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
     * @ORM\Column(name="brewerFirstName", type="string", length=200, nullable=true)
     */
    private $brewerfirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerLastName", type="string", length=200, nullable=true)
     */
    private $brewerlastname;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerMiddleName", type="string", length=200, nullable=true)
     */
    private $brewermiddlename;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerPrefix", type="string", length=200, nullable=true)
     */
    private $brewerprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerSuffix", type="string", length=200, nullable=true)
     */
    private $brewersuffix;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerAge", type="string", length=200, nullable=true)
     */
    private $brewerage;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerCity", type="string", length=200, nullable=true)
     */
    private $brewercity;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerState", type="string", length=200, nullable=true)
     */
    private $brewerstate;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerCountry", type="string", length=200, nullable=true)
     */
    private $brewercountry;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerAbout", type="text", nullable=true)
     */
    private $brewerabout;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerLogName", type="string", length=200, nullable=false)
     */
    private $brewerlogname;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerTagline", type="string", length=200, nullable=true)
     */
    private $brewertagline;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerFavStyles", type="string", length=200, nullable=true)
     */
    private $brewerfavstyles;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerPrefMethod", type="string", length=200, nullable=true)
     */
    private $brewerprefmethod;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerClubs", type="text", nullable=true)
     */
    private $brewerclubs;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerOther", type="text", nullable=true)
     */
    private $brewerother;

    /**
     * @var string
     *
     * @ORM\Column(name="brewerImage", type="string", length=200, nullable=true)
     */
    private $brewerimage;



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
     * Set brewerfirstname
     *
     * @param string $brewerfirstname
     * @return Brewer
     */
    public function setFirstName($brewerfirstname)
    {
        $this->brewerfirstname = $brewerfirstname;
    
        return $this;
    }

    /**
     * Get brewerfirstname
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->brewerfirstname;
    }

    /**
     * Set brewerlastname
     *
     * @param string $brewerlastname
     * @return Brewer
     */
    public function setLastName($brewerlastname)
    {
        $this->brewerlastname = $brewerlastname;
    
        return $this;
    }

    /**
     * Get brewerlastname
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->brewerlastname;
    }

    /**
     * Set brewermiddlename
     *
     * @param string $brewermiddlename
     * @return Brewer
     */
    public function setMiddleName($brewermiddlename)
    {
        $this->brewermiddlename = $brewermiddlename;
    
        return $this;
    }

    /**
     * Get brewermiddlename
     *
     * @return string 
     */
    public function getMiddleName()
    {
        return $this->brewermiddlename;
    }

    /**
     * Set brewerprefix
     *
     * @param string $brewerprefix
     * @return Brewer
     */
    public function setPrefix($brewerprefix)
    {
        $this->brewerprefix = $brewerprefix;
    
        return $this;
    }

    /**
     * Get brewerprefix
     *
     * @return string 
     */
    public function getPrefix()
    {
        return $this->brewerprefix;
    }

    /**
     * Set brewersuffix
     *
     * @param string $brewersuffix
     * @return Brewer
     */
    public function setSuffix($brewersuffix)
    {
        $this->brewersuffix = $brewersuffix;
    
        return $this;
    }

    /**
     * Get brewersuffix
     *
     * @return string 
     */
    public function getSuffix()
    {
        return $this->brewersuffix;
    }

    /**
     * Set brewerage
     *
     * @param string $brewerage
     * @return Brewer
     */
    public function setAge($brewerage)
    {
        $this->brewerage = $brewerage;
    
        return $this;
    }

    /**
     * Get brewerage
     *
     * @return string 
     */
    public function getAge()
    {
        return $this->brewerage;
    }

    /**
     * Set brewercity
     *
     * @param string $brewercity
     * @return Brewer
     */
    public function setCity($brewercity)
    {
        $this->brewercity = $brewercity;
    
        return $this;
    }

    /**
     * Get brewercity
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->brewercity;
    }

    /**
     * Set brewerstate
     *
     * @param string $brewerstate
     * @return Brewer
     */
    public function setState($brewerstate)
    {
        $this->brewerstate = $brewerstate;
    
        return $this;
    }

    /**
     * Get brewerstate
     *
     * @return string 
     */
    public function getState()
    {
        return $this->brewerstate;
    }

    /**
     * Set brewercountry
     *
     * @param string $brewercountry
     * @return Brewer
     */
    public function setCountry($brewercountry)
    {
        $this->brewercountry = $brewercountry;
    
        return $this;
    }

    /**
     * Get brewercountry
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->brewercountry;
    }

    /**
     * Set brewerabout
     *
     * @param string $brewerabout
     * @return Brewer
     */
    public function setAbout($brewerabout)
    {
        $this->brewerabout = $brewerabout;
    
        return $this;
    }

    /**
     * Get brewerabout
     *
     * @return string 
     */
    public function getAbout()
    {
        return $this->brewerabout;
    }

    /**
     * Set brewerlogname
     *
     * @param string $brewerlogname
     * @return Brewer
     */
    public function setLogname($brewerlogname)
    {
        $this->brewerlogname = $brewerlogname;
    
        return $this;
    }

    /**
     * Get brewerlogname
     *
     * @return string 
     */
    public function getLogname()
    {
        return $this->brewerlogname;
    }

    /**
     * Set brewertagline
     *
     * @param string $brewertagline
     * @return Brewer
     */
    public function setTagline($brewertagline)
    {
        $this->brewertagline = $brewertagline;
    
        return $this;
    }

    /**
     * Get brewertagline
     *
     * @return string 
     */
    public function getTagline()
    {
        return $this->brewertagline;
    }

    /**
     * Set brewerfavstyles
     *
     * @param string $brewerfavstyles
     * @return Brewer
     */
    public function setFavStyles($brewerfavstyles)
    {
        $this->brewerfavstyles = $brewerfavstyles;
    
        return $this;
    }

    /**
     * Get brewerfavstyles
     *
     * @return string 
     */
    public function getFavStyles()
    {
        return $this->brewerfavstyles;
    }

    /**
     * Set brewerprefmethod
     *
     * @param string $brewerprefmethod
     * @return Brewer
     */
    public function setPrefMethod($brewerprefmethod)
    {
        $this->brewerprefmethod = $brewerprefmethod;
    
        return $this;
    }

    /**
     * Get brewerprefmethod
     *
     * @return string 
     */
    public function getPrefMethod()
    {
        return $this->brewerprefmethod;
    }

    /**
     * Set brewerclubs
     *
     * @param string $brewerclubs
     * @return Brewer
     */
    public function setClubs($brewerclubs)
    {
        $this->brewerclubs = $brewerclubs;
    
        return $this;
    }

    /**
     * Get brewerclubs
     *
     * @return string 
     */
    public function getClubs()
    {
        return $this->brewerclubs;
    }

    /**
     * Set brewerother
     *
     * @param string $brewerother
     * @return Brewer
     */
    public function setOther($brewerother)
    {
        $this->brewerother = $brewerother;
    
        return $this;
    }

    /**
     * Get brewerother
     *
     * @return string 
     */
    public function getOther()
    {
        return $this->brewerother;
    }

    /**
     * Set brewerimage
     *
     * @param string $brewerimage
     * @return Brewer
     */
    public function setImage($brewerimage)
    {
        $this->brewerimage = $brewerimage;
    
        return $this;
    }

    /**
     * Get brewerimage
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->brewerimage;
    }
}