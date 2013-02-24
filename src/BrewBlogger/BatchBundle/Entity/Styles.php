<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Styles
 *
 * @ORM\Table(name="styles")
 * @ORM\Entity
 */
class Styles
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
     * @ORM\Column(name="brewStyleNum", type="string", length=3, nullable=true)
     */
    private $brewstylenum;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyle", type="string", length=250, nullable=true)
     */
    private $brewstyle;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyleOG", type="string", length=20, nullable=true)
     */
    private $brewstyleog;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyleOGMax", type="string", length=25, nullable=true)
     */
    private $brewstyleogmax;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyleFG", type="string", length=20, nullable=true)
     */
    private $brewstylefg;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyleFGMax", type="string", length=25, nullable=true)
     */
    private $brewstylefgmax;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyleABV", type="string", length=250, nullable=true)
     */
    private $brewstyleabv;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyleABVMax", type="string", length=25, nullable=true)
     */
    private $brewstyleabvmax;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyleIBU", type="string", length=250, nullable=true)
     */
    private $brewstyleibu;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyleIBUMax", type="string", length=25, nullable=true)
     */
    private $brewstyleibumax;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyleSRM", type="string", length=250, nullable=true)
     */
    private $brewstylesrm;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyleSRMMax", type="string", length=25, nullable=true)
     */
    private $brewstylesrmmax;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyleType", type="string", length=25, nullable=true)
     */
    private $brewstyletype;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyleInfo", type="text", nullable=true)
     */
    private $brewstyleinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyleLink", type="string", length=200, nullable=true)
     */
    private $brewstylelink;

    /**
     * @var string
     *
     * @ORM\Column(name="brewStyleGroup", type="string", length=2, nullable=true)
     */
    private $brewstylegroup;



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
     * Set brewstylenum
     *
     * @param string $brewstylenum
     * @return Styles
     */
    public function setBrewstylenum($brewstylenum)
    {
        $this->brewstylenum = $brewstylenum;
    
        return $this;
    }

    /**
     * Get brewstylenum
     *
     * @return string 
     */
    public function getBrewstylenum()
    {
        return $this->brewstylenum;
    }

    /**
     * Set brewstyle
     *
     * @param string $brewstyle
     * @return Styles
     */
    public function setBrewstyle($brewstyle)
    {
        $this->brewstyle = $brewstyle;
    
        return $this;
    }

    /**
     * Get brewstyle
     *
     * @return string 
     */
    public function getBrewstyle()
    {
        return $this->brewstyle;
    }

    /**
     * Set brewstyleog
     *
     * @param string $brewstyleog
     * @return Styles
     */
    public function setBrewstyleog($brewstyleog)
    {
        $this->brewstyleog = $brewstyleog;
    
        return $this;
    }

    /**
     * Get brewstyleog
     *
     * @return string 
     */
    public function getBrewstyleog()
    {
        return $this->brewstyleog;
    }

    /**
     * Set brewstyleogmax
     *
     * @param string $brewstyleogmax
     * @return Styles
     */
    public function setBrewstyleogmax($brewstyleogmax)
    {
        $this->brewstyleogmax = $brewstyleogmax;
    
        return $this;
    }

    /**
     * Get brewstyleogmax
     *
     * @return string 
     */
    public function getBrewstyleogmax()
    {
        return $this->brewstyleogmax;
    }

    /**
     * Set brewstylefg
     *
     * @param string $brewstylefg
     * @return Styles
     */
    public function setBrewstylefg($brewstylefg)
    {
        $this->brewstylefg = $brewstylefg;
    
        return $this;
    }

    /**
     * Get brewstylefg
     *
     * @return string 
     */
    public function getBrewstylefg()
    {
        return $this->brewstylefg;
    }

    /**
     * Set brewstylefgmax
     *
     * @param string $brewstylefgmax
     * @return Styles
     */
    public function setBrewstylefgmax($brewstylefgmax)
    {
        $this->brewstylefgmax = $brewstylefgmax;
    
        return $this;
    }

    /**
     * Get brewstylefgmax
     *
     * @return string 
     */
    public function getBrewstylefgmax()
    {
        return $this->brewstylefgmax;
    }

    /**
     * Set brewstyleabv
     *
     * @param string $brewstyleabv
     * @return Styles
     */
    public function setBrewstyleabv($brewstyleabv)
    {
        $this->brewstyleabv = $brewstyleabv;
    
        return $this;
    }

    /**
     * Get brewstyleabv
     *
     * @return string 
     */
    public function getBrewstyleabv()
    {
        return $this->brewstyleabv;
    }

    /**
     * Set brewstyleabvmax
     *
     * @param string $brewstyleabvmax
     * @return Styles
     */
    public function setBrewstyleabvmax($brewstyleabvmax)
    {
        $this->brewstyleabvmax = $brewstyleabvmax;
    
        return $this;
    }

    /**
     * Get brewstyleabvmax
     *
     * @return string 
     */
    public function getBrewstyleabvmax()
    {
        return $this->brewstyleabvmax;
    }

    /**
     * Set brewstyleibu
     *
     * @param string $brewstyleibu
     * @return Styles
     */
    public function setBrewstyleibu($brewstyleibu)
    {
        $this->brewstyleibu = $brewstyleibu;
    
        return $this;
    }

    /**
     * Get brewstyleibu
     *
     * @return string 
     */
    public function getBrewstyleibu()
    {
        return $this->brewstyleibu;
    }

    /**
     * Set brewstyleibumax
     *
     * @param string $brewstyleibumax
     * @return Styles
     */
    public function setBrewstyleibumax($brewstyleibumax)
    {
        $this->brewstyleibumax = $brewstyleibumax;
    
        return $this;
    }

    /**
     * Get brewstyleibumax
     *
     * @return string 
     */
    public function getBrewstyleibumax()
    {
        return $this->brewstyleibumax;
    }

    /**
     * Set brewstylesrm
     *
     * @param string $brewstylesrm
     * @return Styles
     */
    public function setBrewstylesrm($brewstylesrm)
    {
        $this->brewstylesrm = $brewstylesrm;
    
        return $this;
    }

    /**
     * Get brewstylesrm
     *
     * @return string 
     */
    public function getBrewstylesrm()
    {
        return $this->brewstylesrm;
    }

    /**
     * Set brewstylesrmmax
     *
     * @param string $brewstylesrmmax
     * @return Styles
     */
    public function setBrewstylesrmmax($brewstylesrmmax)
    {
        $this->brewstylesrmmax = $brewstylesrmmax;
    
        return $this;
    }

    /**
     * Get brewstylesrmmax
     *
     * @return string 
     */
    public function getBrewstylesrmmax()
    {
        return $this->brewstylesrmmax;
    }

    /**
     * Set brewstyletype
     *
     * @param string $brewstyletype
     * @return Styles
     */
    public function setBrewstyletype($brewstyletype)
    {
        $this->brewstyletype = $brewstyletype;
    
        return $this;
    }

    /**
     * Get brewstyletype
     *
     * @return string 
     */
    public function getBrewstyletype()
    {
        return $this->brewstyletype;
    }

    /**
     * Set brewstyleinfo
     *
     * @param string $brewstyleinfo
     * @return Styles
     */
    public function setBrewstyleinfo($brewstyleinfo)
    {
        $this->brewstyleinfo = $brewstyleinfo;
    
        return $this;
    }

    /**
     * Get brewstyleinfo
     *
     * @return string 
     */
    public function getBrewstyleinfo()
    {
        return $this->brewstyleinfo;
    }

    /**
     * Set brewstylelink
     *
     * @param string $brewstylelink
     * @return Styles
     */
    public function setBrewstylelink($brewstylelink)
    {
        $this->brewstylelink = $brewstylelink;
    
        return $this;
    }

    /**
     * Get brewstylelink
     *
     * @return string 
     */
    public function getBrewstylelink()
    {
        return $this->brewstylelink;
    }

    /**
     * Set brewstylegroup
     *
     * @param string $brewstylegroup
     * @return Styles
     */
    public function setBrewstylegroup($brewstylegroup)
    {
        $this->brewstylegroup = $brewstylegroup;
    
        return $this;
    }

    /**
     * Get brewstylegroup
     *
     * @return string 
     */
    public function getBrewstylegroup()
    {
        return $this->brewstylegroup;
    }
}