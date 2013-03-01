<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * YeastProfiles
 *
 * @ORM\Table(name="yeast_profiles")
 * @ORM\Entity
 */
class YeastProfiles
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
     * @ORM\Column(name="yeastName", type="string", length=255, nullable=true)
     */
    private $yeastname;

    /**
     * @var string
     *
     * @ORM\Column(name="yeastFloc", type="string", length=255, nullable=true)
     */
    private $yeastfloc;

    /**
     * @var string
     *
     * @ORM\Column(name="yeastAtten", type="string", length=255, nullable=true)
     */
    private $yeastatten;

    /**
     * @var string
     *
     * @ORM\Column(name="yeastTolerance", type="string", length=255, nullable=true)
     */
    private $yeasttolerance;

    /**
     * @var string
     *
     * @ORM\Column(name="yeastType", type="string", length=255, nullable=true)
     */
    private $yeasttype;

    /**
     * @var string
     *
     * @ORM\Column(name="yeastForm", type="string", length=255, nullable=true)
     */
    private $yeastform;

    /**
     * @var string
     *
     * @ORM\Column(name="yeastAmount", type="string", length=255, nullable=true)
     */
    private $yeastamount;

    /**
     * @var string
     *
     * @ORM\Column(name="yeastLab", type="string", length=255, nullable=true)
     */
    private $yeastlab;

    /**
     * @var string
     *
     * @ORM\Column(name="yeastProdID", type="string", length=255, nullable=true)
     */
    private $yeastprodid;

    /**
     * @var string
     *
     * @ORM\Column(name="yeastMinTemp", type="string", length=255, nullable=true)
     */
    private $yeastmintemp;

    /**
     * @var string
     *
     * @ORM\Column(name="yeastMaxTemp", type="string", length=255, nullable=true)
     */
    private $yeastmaxtemp;

    /**
     * @var string
     *
     * @ORM\Column(name="yeastNotes", type="string", length=255, nullable=true)
     */
    private $yeastnotes;

    /**
     * @var string
     *
     * @ORM\Column(name="yeastBestFor", type="string", length=255, nullable=true)
     */
    private $yeastbestfor;

    /**
     * @var string
     *
     * @ORM\Column(name="yeastMaxReuse", type="string", length=255, nullable=true)
     */
    private $yeastmaxreuse;

    /**
     * @var string
     *
     * @ORM\Column(name="yeastBrewerID", type="string", length=255, nullable=true)
     */
    private $yeastbrewerid;



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
     * Set yeastname
     *
     * @param string $yeastname
     * @return YeastProfiles
     */
    public function setName($yeastname)
    {
        $this->yeastname = $yeastname;
    
        return $this;
    }

    /**
     * Get yeastname
     *
     * @return string 
     */
    public function getName()
    {
        return $this->yeastname;
    }

    /**
     * Set yeastfloc
     *
     * @param string $yeastfloc
     * @return YeastProfiles
     */
    public function setFloc($yeastfloc)
    {
        $this->yeastfloc = $yeastfloc;
    
        return $this;
    }

    /**
     * Get yeastfloc
     *
     * @return string 
     */
    public function getFloc()
    {
        return $this->yeastfloc;
    }

    /**
     * Set yeastatten
     *
     * @param string $yeastatten
     * @return YeastProfiles
     */
    public function setAtten($yeastatten)
    {
        $this->yeastatten = $yeastatten;
    
        return $this;
    }

    /**
     * Get yeastatten
     *
     * @return string 
     */
    public function getAtten()
    {
        return $this->yeastatten;
    }

    /**
     * Set yeasttolerance
     *
     * @param string $yeasttolerance
     * @return YeastProfiles
     */
    public function setTolerance($yeasttolerance)
    {
        $this->yeasttolerance = $yeasttolerance;
    
        return $this;
    }

    /**
     * Get yeasttolerance
     *
     * @return string 
     */
    public function getTolerance()
    {
        return $this->yeasttolerance;
    }

    /**
     * Set yeasttype
     *
     * @param string $yeasttype
     * @return YeastProfiles
     */
    public function setType($yeasttype)
    {
        $this->yeasttype = $yeasttype;
    
        return $this;
    }

    /**
     * Get yeasttype
     *
     * @return string 
     */
    public function getType()
    {
        return $this->yeasttype;
    }

    /**
     * Set yeastform
     *
     * @param string $yeastform
     * @return YeastProfiles
     */
    public function setForm($yeastform)
    {
        $this->yeastform = $yeastform;
    
        return $this;
    }

    /**
     * Get yeastform
     *
     * @return string 
     */
    public function getForm()
    {
        return $this->yeastform;
    }

    /**
     * Set yeastamount
     *
     * @param string $yeastamount
     * @return YeastProfiles
     */
    public function setAmount($yeastamount)
    {
        $this->yeastamount = $yeastamount;
    
        return $this;
    }

    /**
     * Get yeastamount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->yeastamount;
    }

    /**
     * Set yeastlab
     *
     * @param string $yeastlab
     * @return YeastProfiles
     */
    public function setLab($yeastlab)
    {
        $this->yeastlab = $yeastlab;
    
        return $this;
    }

    /**
     * Get yeastlab
     *
     * @return string 
     */
    public function getLab()
    {
        return $this->yeastlab;
    }

    /**
     * Set yeastprodid
     *
     * @param string $yeastprodid
     * @return YeastProfiles
     */
    public function setProdID($yeastprodid)
    {
        $this->yeastprodid = $yeastprodid;
    
        return $this;
    }

    /**
     * Get yeastprodid
     *
     * @return string 
     */
    public function getProdID()
    {
        return $this->yeastprodid;
    }

    /**
     * Set yeastmintemp
     *
     * @param string $yeastmintemp
     * @return YeastProfiles
     */
    public function setMinTemp($yeastmintemp)
    {
        $this->yeastmintemp = $yeastmintemp;
    
        return $this;
    }

    /**
     * Get yeastmintemp
     *
     * @return string 
     */
    public function getMinTemp()
    {
        return $this->yeastmintemp;
    }

    /**
     * Set yeastmaxtemp
     *
     * @param string $yeastmaxtemp
     * @return YeastProfiles
     */
    public function setMaxTemp($yeastmaxtemp)
    {
        $this->yeastmaxtemp = $yeastmaxtemp;
    
        return $this;
    }

    /**
     * Get yeastmaxtemp
     *
     * @return string 
     */
    public function getMaxTemp()
    {
        return $this->yeastmaxtemp;
    }

    /**
     * Set yeastnotes
     *
     * @param string $yeastnotes
     * @return YeastProfiles
     */
    public function setNotes($yeastnotes)
    {
        $this->yeastnotes = $yeastnotes;
    
        return $this;
    }

    /**
     * Get yeastnotes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->yeastnotes;
    }

    /**
     * Set yeastbestfor
     *
     * @param string $yeastbestfor
     * @return YeastProfiles
     */
    public function setBestFor($yeastbestfor)
    {
        $this->yeastbestfor = $yeastbestfor;
    
        return $this;
    }

    /**
     * Get yeastbestfor
     *
     * @return string 
     */
    public function getBestFor()
    {
        return $this->yeastbestfor;
    }

    /**
     * Set yeastmaxreuse
     *
     * @param string $yeastmaxreuse
     * @return YeastProfiles
     */
    public function setMaxReuse($yeastmaxreuse)
    {
        $this->yeastmaxreuse = $yeastmaxreuse;
    
        return $this;
    }

    /**
     * Get yeastmaxreuse
     *
     * @return string 
     */
    public function getMaxReuse()
    {
        return $this->yeastmaxreuse;
    }

    /**
     * Set yeastbrewerid
     *
     * @param string $yeastbrewerid
     * @return YeastProfiles
     */
    public function setBrewerID($yeastbrewerid)
    {
        $this->yeastbrewerid = $yeastbrewerid;
    
        return $this;
    }

    /**
     * Get yeastbrewerid
     *
     * @return string 
     */
    public function getBrewerID()
    {
        return $this->yeastbrewerid;
    }
    
    public function __toString() {
        return sprintf("%s %s (%s)", $this->yeastlab, $this->yeastname, $this->yeastprodid);
    }
}