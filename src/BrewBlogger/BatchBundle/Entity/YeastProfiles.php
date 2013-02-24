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
    public function setYeastname($yeastname)
    {
        $this->yeastname = $yeastname;
    
        return $this;
    }

    /**
     * Get yeastname
     *
     * @return string 
     */
    public function getYeastname()
    {
        return $this->yeastname;
    }

    /**
     * Set yeastfloc
     *
     * @param string $yeastfloc
     * @return YeastProfiles
     */
    public function setYeastfloc($yeastfloc)
    {
        $this->yeastfloc = $yeastfloc;
    
        return $this;
    }

    /**
     * Get yeastfloc
     *
     * @return string 
     */
    public function getYeastfloc()
    {
        return $this->yeastfloc;
    }

    /**
     * Set yeastatten
     *
     * @param string $yeastatten
     * @return YeastProfiles
     */
    public function setYeastatten($yeastatten)
    {
        $this->yeastatten = $yeastatten;
    
        return $this;
    }

    /**
     * Get yeastatten
     *
     * @return string 
     */
    public function getYeastatten()
    {
        return $this->yeastatten;
    }

    /**
     * Set yeasttolerance
     *
     * @param string $yeasttolerance
     * @return YeastProfiles
     */
    public function setYeasttolerance($yeasttolerance)
    {
        $this->yeasttolerance = $yeasttolerance;
    
        return $this;
    }

    /**
     * Get yeasttolerance
     *
     * @return string 
     */
    public function getYeasttolerance()
    {
        return $this->yeasttolerance;
    }

    /**
     * Set yeasttype
     *
     * @param string $yeasttype
     * @return YeastProfiles
     */
    public function setYeasttype($yeasttype)
    {
        $this->yeasttype = $yeasttype;
    
        return $this;
    }

    /**
     * Get yeasttype
     *
     * @return string 
     */
    public function getYeasttype()
    {
        return $this->yeasttype;
    }

    /**
     * Set yeastform
     *
     * @param string $yeastform
     * @return YeastProfiles
     */
    public function setYeastform($yeastform)
    {
        $this->yeastform = $yeastform;
    
        return $this;
    }

    /**
     * Get yeastform
     *
     * @return string 
     */
    public function getYeastform()
    {
        return $this->yeastform;
    }

    /**
     * Set yeastamount
     *
     * @param string $yeastamount
     * @return YeastProfiles
     */
    public function setYeastamount($yeastamount)
    {
        $this->yeastamount = $yeastamount;
    
        return $this;
    }

    /**
     * Get yeastamount
     *
     * @return string 
     */
    public function getYeastamount()
    {
        return $this->yeastamount;
    }

    /**
     * Set yeastlab
     *
     * @param string $yeastlab
     * @return YeastProfiles
     */
    public function setYeastlab($yeastlab)
    {
        $this->yeastlab = $yeastlab;
    
        return $this;
    }

    /**
     * Get yeastlab
     *
     * @return string 
     */
    public function getYeastlab()
    {
        return $this->yeastlab;
    }

    /**
     * Set yeastprodid
     *
     * @param string $yeastprodid
     * @return YeastProfiles
     */
    public function setYeastprodid($yeastprodid)
    {
        $this->yeastprodid = $yeastprodid;
    
        return $this;
    }

    /**
     * Get yeastprodid
     *
     * @return string 
     */
    public function getYeastprodid()
    {
        return $this->yeastprodid;
    }

    /**
     * Set yeastmintemp
     *
     * @param string $yeastmintemp
     * @return YeastProfiles
     */
    public function setYeastmintemp($yeastmintemp)
    {
        $this->yeastmintemp = $yeastmintemp;
    
        return $this;
    }

    /**
     * Get yeastmintemp
     *
     * @return string 
     */
    public function getYeastmintemp()
    {
        return $this->yeastmintemp;
    }

    /**
     * Set yeastmaxtemp
     *
     * @param string $yeastmaxtemp
     * @return YeastProfiles
     */
    public function setYeastmaxtemp($yeastmaxtemp)
    {
        $this->yeastmaxtemp = $yeastmaxtemp;
    
        return $this;
    }

    /**
     * Get yeastmaxtemp
     *
     * @return string 
     */
    public function getYeastmaxtemp()
    {
        return $this->yeastmaxtemp;
    }

    /**
     * Set yeastnotes
     *
     * @param string $yeastnotes
     * @return YeastProfiles
     */
    public function setYeastnotes($yeastnotes)
    {
        $this->yeastnotes = $yeastnotes;
    
        return $this;
    }

    /**
     * Get yeastnotes
     *
     * @return string 
     */
    public function getYeastnotes()
    {
        return $this->yeastnotes;
    }

    /**
     * Set yeastbestfor
     *
     * @param string $yeastbestfor
     * @return YeastProfiles
     */
    public function setYeastbestfor($yeastbestfor)
    {
        $this->yeastbestfor = $yeastbestfor;
    
        return $this;
    }

    /**
     * Get yeastbestfor
     *
     * @return string 
     */
    public function getYeastbestfor()
    {
        return $this->yeastbestfor;
    }

    /**
     * Set yeastmaxreuse
     *
     * @param string $yeastmaxreuse
     * @return YeastProfiles
     */
    public function setYeastmaxreuse($yeastmaxreuse)
    {
        $this->yeastmaxreuse = $yeastmaxreuse;
    
        return $this;
    }

    /**
     * Get yeastmaxreuse
     *
     * @return string 
     */
    public function getYeastmaxreuse()
    {
        return $this->yeastmaxreuse;
    }

    /**
     * Set yeastbrewerid
     *
     * @param string $yeastbrewerid
     * @return YeastProfiles
     */
    public function setYeastbrewerid($yeastbrewerid)
    {
        $this->yeastbrewerid = $yeastbrewerid;
    
        return $this;
    }

    /**
     * Get yeastbrewerid
     *
     * @return string 
     */
    public function getYeastbrewerid()
    {
        return $this->yeastbrewerid;
    }
}