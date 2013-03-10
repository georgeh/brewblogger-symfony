<?php

namespace BrewBlogger\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preferences
 *
 * @ORM\Table(name="preferences")
 * @ORM\Entity
 */
class Preferences
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
     * @ORM\Column(name="measFluid1", type="string", length=100, nullable=true)
     */
    private $measfluid1;

    /**
     * @var string
     *
     * @ORM\Column(name="measFluid2", type="string", length=100, nullable=true)
     */
    private $measfluid2;

    /**
     * @var string
     *
     * @ORM\Column(name="measWeight1", type="string", length=100, nullable=true)
     */
    private $measweight1;

    /**
     * @var string
     *
     * @ORM\Column(name="measWeight2", type="string", length=100, nullable=true)
     */
    private $measweight2;

    /**
     * @var string
     *
     * @ORM\Column(name="measWaterGrainRatio", type="string", length=255, nullable=true)
     */
    private $measwatergrainratio;

    /**
     * @var string
     *
     * @ORM\Column(name="measTemp", type="string", length=100, nullable=true)
     */
    private $meastemp;

    /**
     * @var string
     *
     * @ORM\Column(name="measColor", type="string", length=100, nullable=true)
     */
    private $meascolor;

    /**
     * @var string
     *
     * @ORM\Column(name="measBitter", type="string", length=100, nullable=true)
     */
    private $measbitter;

    /**
     * @var string
     *
     * @ORM\Column(name="measAbbrev", type="string", length=1, nullable=true)
     */
    private $measabbrev;

    /**
     * @var string
     *
     * @ORM\Column(name="allowReviews", type="string", length=1, nullable=true)
     */
    private $allowreviews;

    /**
     * @var string
     *
     * @ORM\Column(name="allowPrintLog", type="string", length=1, nullable=true)
     */
    private $allowprintlog;

    /**
     * @var string
     *
     * @ORM\Column(name="allowPrintRecipe", type="string", length=1, nullable=true)
     */
    private $allowprintrecipe;

    /**
     * @var string
     *
     * @ORM\Column(name="allowPrintXML", type="string", length=1, nullable=true)
     */
    private $allowprintxml;

    /**
     * @var string
     *
     * @ORM\Column(name="allowSpecifics", type="string", length=1, nullable=true)
     */
    private $allowspecifics;

    /**
     * @var string
     *
     * @ORM\Column(name="allowGeneral", type="string", length=1, nullable=true)
     */
    private $allowgeneral;

    /**
     * @var string
     *
     * @ORM\Column(name="allowComments", type="string", length=1, nullable=true)
     */
    private $allowcomments;

    /**
     * @var string
     *
     * @ORM\Column(name="allowRecipe", type="string", length=1, nullable=true)
     */
    private $allowrecipe;

    /**
     * @var string
     *
     * @ORM\Column(name="allowMash", type="string", length=1, nullable=true)
     */
    private $allowmash;

    /**
     * @var string
     *
     * @ORM\Column(name="allowWater", type="string", length=1, nullable=true)
     */
    private $allowwater;

    /**
     * @var string
     *
     * @ORM\Column(name="allowProcedure", type="string", length=1, nullable=true)
     */
    private $allowprocedure;

    /**
     * @var string
     *
     * @ORM\Column(name="allowSpecialProcedure", type="string", length=1, nullable=true)
     */
    private $allowspecialprocedure;

    /**
     * @var string
     *
     * @ORM\Column(name="allowFermentation", type="string", length=1, nullable=true)
     */
    private $allowfermentation;

    /**
     * @var string
     *
     * @ORM\Column(name="allowLabel", type="string", length=1, nullable=true)
     */
    private $allowlabel;

    /**
     * @var string
     *
     * @ORM\Column(name="allowRelated", type="string", length=1, nullable=true)
     */
    private $allowrelated;

    /**
     * @var string
     *
     * @ORM\Column(name="allowList", type="string", length=1, nullable=true)
     */
    private $allowlist;

    /**
     * @var string
     *
     * @ORM\Column(name="allowStatus", type="string", length=1, nullable=true)
     */
    private $allowstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="allowUpcoming", type="string", length=1, nullable=true)
     */
    private $allowupcoming;

    /**
     * @var string
     *
     * @ORM\Column(name="allowAwards", type="string", length=1, nullable=true)
     */
    private $allowawards;

    /**
     * @var string
     *
     * @ORM\Column(name="allowCalendar", type="string", length=1, nullable=true)
     */
    private $allowcalendar;

    /**
     * @var string
     *
     * @ORM\Column(name="allowNews", type="string", length=1, nullable=true)
     */
    private $allownews;

    /**
     * @var string
     *
     * @ORM\Column(name="allowProfile", type="string", length=1, nullable=true)
     */
    private $allowprofile;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=250, nullable=true)
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=1, nullable=true)
     */
    private $mode;

    /**
     * @var string
     *
     * @ORM\Column(name="home", type="string", length=250, nullable=true)
     */
    private $home;

    /**
     * @var string
     *
     * @ORM\Column(name="menuHome", type="string", length=255, nullable=true)
     */
    private $menuhome;

    /**
     * @var string
     *
     * @ORM\Column(name="menuBrewBlogs", type="string", length=255, nullable=true)
     */
    private $menubrewblogs;

    /**
     * @var string
     *
     * @ORM\Column(name="menuRecipes", type="string", length=255, nullable=true)
     */
    private $menurecipes;

    /**
     * @var string
     *
     * @ORM\Column(name="menuAwards", type="string", length=255, nullable=true)
     */
    private $menuawards;

    /**
     * @var string
     *
     * @ORM\Column(name="menuAbout", type="string", length=255, nullable=true)
     */
    private $menuabout;

    /**
     * @var string
     *
     * @ORM\Column(name="menuReference", type="string", length=255, nullable=true)
     */
    private $menureference;

    /**
     * @var string
     *
     * @ORM\Column(name="menuCalculators", type="string", length=255, nullable=true)
     */
    private $menucalculators;

    /**
     * @var string
     *
     * @ORM\Column(name="menuCalendar", type="string", length=255, nullable=true)
     */
    private $menucalendar;

    /**
     * @var string
     *
     * @ORM\Column(name="menuLogin", type="string", length=255, nullable=true)
     */
    private $menulogin;

    /**
     * @var string
     *
     * @ORM\Column(name="menuLogout", type="string", length=255, nullable=true)
     */
    private $menulogout;

    /**
     * @var string
     *
     * @ORM\Column(name="menuMembers", type="string", length=255, nullable=true)
     */
    private $menumembers;

    /**
     * @var string
     *
     * @ORM\Column(name="mashDisplayMethod", type="string", length=1, nullable=true)
     */
    private $mashdisplaymethod;

    /**
     * @var string
     *
     * @ORM\Column(name="waterDisplayMethod", type="string", length=1, nullable=true)
     */
    private $waterdisplaymethod;

    /**
     * @var float
     *
     * @ORM\Column(name="hopPelletFactor", type="float", nullable=false)
     */
    private $hoppelletfactor;



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
     * Set measfluid1
     *
     * @param string $measfluid1
     * @return Preferences
     */
    public function setMeasfluid1($measfluid1)
    {
        $this->measfluid1 = $measfluid1;
    
        return $this;
    }

    /**
     * Get measfluid1
     *
     * @return string 
     */
    public function getMeasfluid1()
    {
        return $this->measfluid1;
    }

    /**
     * Set measfluid2
     *
     * @param string $measfluid2
     * @return Preferences
     */
    public function setMeasfluid2($measfluid2)
    {
        $this->measfluid2 = $measfluid2;
    
        return $this;
    }

    /**
     * Get measfluid2
     *
     * @return string 
     */
    public function getMeasfluid2()
    {
        return $this->measfluid2;
    }

    /**
     * Set measweight1
     *
     * @param string $measweight1
     * @return Preferences
     */
    public function setMeasweight1($measweight1)
    {
        $this->measweight1 = $measweight1;
    
        return $this;
    }

    /**
     * Get measweight1
     *
     * @return string 
     */
    public function getMeasweight1()
    {
        return $this->measweight1;
    }

    /**
     * Set measweight2
     *
     * @param string $measweight2
     * @return Preferences
     */
    public function setMeasweight2($measweight2)
    {
        $this->measweight2 = $measweight2;
    
        return $this;
    }

    /**
     * Get measweight2
     *
     * @return string 
     */
    public function getMeasweight2()
    {
        return $this->measweight2;
    }

    /**
     * Set measwatergrainratio
     *
     * @param string $measwatergrainratio
     * @return Preferences
     */
    public function setMeaswatergrainratio($measwatergrainratio)
    {
        $this->measwatergrainratio = $measwatergrainratio;
    
        return $this;
    }

    /**
     * Get measwatergrainratio
     *
     * @return string 
     */
    public function getMeaswatergrainratio()
    {
        return $this->measwatergrainratio;
    }

    /**
     * Set meastemp
     *
     * @param string $meastemp
     * @return Preferences
     */
    public function setMeastemp($meastemp)
    {
        $this->meastemp = $meastemp;
    
        return $this;
    }

    /**
     * Get meastemp
     *
     * @return string 
     */
    public function getMeastemp()
    {
        return $this->meastemp;
    }

    /**
     * Set meascolor
     *
     * @param string $meascolor
     * @return Preferences
     */
    public function setMeascolor($meascolor)
    {
        $this->meascolor = $meascolor;
    
        return $this;
    }

    /**
     * Get meascolor
     *
     * @return string 
     */
    public function getMeascolor()
    {
        return $this->meascolor;
    }

    /**
     * Set measbitter
     *
     * @param string $measbitter
     * @return Preferences
     */
    public function setMeasbitter($measbitter)
    {
        $this->measbitter = $measbitter;
    
        return $this;
    }

    /**
     * Get measbitter
     *
     * @return string 
     */
    public function getMeasbitter()
    {
        return $this->measbitter;
    }

    /**
     * Set measabbrev
     *
     * @param string $measabbrev
     * @return Preferences
     */
    public function setMeasabbrev($measabbrev)
    {
        $this->measabbrev = $measabbrev;
    
        return $this;
    }

    /**
     * Get measabbrev
     *
     * @return string 
     */
    public function getMeasabbrev()
    {
        return $this->measabbrev;
    }

    /**
     * Set allowreviews
     *
     * @param string $allowreviews
     * @return Preferences
     */
    public function setAllowreviews($allowreviews)
    {
        $this->allowreviews = $allowreviews;
    
        return $this;
    }

    /**
     * Get allowreviews
     *
     * @return string 
     */
    public function getAllowreviews()
    {
        return $this->allowreviews;
    }

    /**
     * Set allowprintlog
     *
     * @param string $allowprintlog
     * @return Preferences
     */
    public function setAllowprintlog($allowprintlog)
    {
        $this->allowprintlog = $allowprintlog;
    
        return $this;
    }

    /**
     * Get allowprintlog
     *
     * @return string 
     */
    public function getAllowprintlog()
    {
        return $this->allowprintlog;
    }

    /**
     * Set allowprintrecipe
     *
     * @param string $allowprintrecipe
     * @return Preferences
     */
    public function setAllowprintrecipe($allowprintrecipe)
    {
        $this->allowprintrecipe = $allowprintrecipe;
    
        return $this;
    }

    /**
     * Get allowprintrecipe
     *
     * @return string 
     */
    public function getAllowprintrecipe()
    {
        return $this->allowprintrecipe;
    }

    /**
     * Set allowprintxml
     *
     * @param string $allowprintxml
     * @return Preferences
     */
    public function setAllowprintxml($allowprintxml)
    {
        $this->allowprintxml = $allowprintxml;
    
        return $this;
    }

    /**
     * Get allowprintxml
     *
     * @return string 
     */
    public function getAllowprintxml()
    {
        return $this->allowprintxml;
    }

    /**
     * Set allowspecifics
     *
     * @param string $allowspecifics
     * @return Preferences
     */
    public function setAllowspecifics($allowspecifics)
    {
        $this->allowspecifics = $allowspecifics;
    
        return $this;
    }

    /**
     * Get allowspecifics
     *
     * @return string 
     */
    public function getAllowspecifics()
    {
        return $this->allowspecifics;
    }

    /**
     * Set allowgeneral
     *
     * @param string $allowgeneral
     * @return Preferences
     */
    public function setAllowgeneral($allowgeneral)
    {
        $this->allowgeneral = $allowgeneral;
    
        return $this;
    }

    /**
     * Get allowgeneral
     *
     * @return string 
     */
    public function getAllowgeneral()
    {
        return $this->allowgeneral;
    }

    /**
     * Set allowcomments
     *
     * @param string $allowcomments
     * @return Preferences
     */
    public function setAllowcomments($allowcomments)
    {
        $this->allowcomments = $allowcomments;
    
        return $this;
    }

    /**
     * Get allowcomments
     *
     * @return string 
     */
    public function getAllowcomments()
    {
        return $this->allowcomments;
    }

    /**
     * Set allowrecipe
     *
     * @param string $allowrecipe
     * @return Preferences
     */
    public function setAllowrecipe($allowrecipe)
    {
        $this->allowrecipe = $allowrecipe;
    
        return $this;
    }

    /**
     * Get allowrecipe
     *
     * @return string 
     */
    public function getAllowrecipe()
    {
        return $this->allowrecipe;
    }

    /**
     * Set allowmash
     *
     * @param string $allowmash
     * @return Preferences
     */
    public function setAllowmash($allowmash)
    {
        $this->allowmash = $allowmash;
    
        return $this;
    }

    /**
     * Get allowmash
     *
     * @return string 
     */
    public function getAllowmash()
    {
        return $this->allowmash;
    }

    /**
     * Set allowwater
     *
     * @param string $allowwater
     * @return Preferences
     */
    public function setAllowwater($allowwater)
    {
        $this->allowwater = $allowwater;
    
        return $this;
    }

    /**
     * Get allowwater
     *
     * @return string 
     */
    public function getAllowwater()
    {
        return $this->allowwater;
    }

    /**
     * Set allowprocedure
     *
     * @param string $allowprocedure
     * @return Preferences
     */
    public function setAllowprocedure($allowprocedure)
    {
        $this->allowprocedure = $allowprocedure;
    
        return $this;
    }

    /**
     * Get allowprocedure
     *
     * @return string 
     */
    public function getAllowprocedure()
    {
        return $this->allowprocedure;
    }

    /**
     * Set allowspecialprocedure
     *
     * @param string $allowspecialprocedure
     * @return Preferences
     */
    public function setAllowspecialprocedure($allowspecialprocedure)
    {
        $this->allowspecialprocedure = $allowspecialprocedure;
    
        return $this;
    }

    /**
     * Get allowspecialprocedure
     *
     * @return string 
     */
    public function getAllowspecialprocedure()
    {
        return $this->allowspecialprocedure;
    }

    /**
     * Set allowfermentation
     *
     * @param string $allowfermentation
     * @return Preferences
     */
    public function setAllowfermentation($allowfermentation)
    {
        $this->allowfermentation = $allowfermentation;
    
        return $this;
    }

    /**
     * Get allowfermentation
     *
     * @return string 
     */
    public function getAllowfermentation()
    {
        return $this->allowfermentation;
    }

    /**
     * Set allowlabel
     *
     * @param string $allowlabel
     * @return Preferences
     */
    public function setAllowlabel($allowlabel)
    {
        $this->allowlabel = $allowlabel;
    
        return $this;
    }

    /**
     * Get allowlabel
     *
     * @return string 
     */
    public function getAllowlabel()
    {
        return $this->allowlabel;
    }

    /**
     * Set allowrelated
     *
     * @param string $allowrelated
     * @return Preferences
     */
    public function setAllowrelated($allowrelated)
    {
        $this->allowrelated = $allowrelated;
    
        return $this;
    }

    /**
     * Get allowrelated
     *
     * @return string 
     */
    public function getAllowrelated()
    {
        return $this->allowrelated;
    }

    /**
     * Set allowlist
     *
     * @param string $allowlist
     * @return Preferences
     */
    public function setAllowlist($allowlist)
    {
        $this->allowlist = $allowlist;
    
        return $this;
    }

    /**
     * Get allowlist
     *
     * @return string 
     */
    public function getAllowlist()
    {
        return $this->allowlist;
    }

    /**
     * Set allowstatus
     *
     * @param string $allowstatus
     * @return Preferences
     */
    public function setAllowstatus($allowstatus)
    {
        $this->allowstatus = $allowstatus;
    
        return $this;
    }

    /**
     * Get allowstatus
     *
     * @return string 
     */
    public function getAllowstatus()
    {
        return $this->allowstatus;
    }

    /**
     * Set allowupcoming
     *
     * @param string $allowupcoming
     * @return Preferences
     */
    public function setAllowupcoming($allowupcoming)
    {
        $this->allowupcoming = $allowupcoming;
    
        return $this;
    }

    /**
     * Get allowupcoming
     *
     * @return string 
     */
    public function getAllowupcoming()
    {
        return $this->allowupcoming;
    }

    /**
     * Set allowawards
     *
     * @param string $allowawards
     * @return Preferences
     */
    public function setAllowawards($allowawards)
    {
        $this->allowawards = $allowawards;
    
        return $this;
    }

    /**
     * Get allowawards
     *
     * @return string 
     */
    public function getAllowawards()
    {
        return $this->allowawards;
    }

    /**
     * Set allowcalendar
     *
     * @param string $allowcalendar
     * @return Preferences
     */
    public function setAllowcalendar($allowcalendar)
    {
        $this->allowcalendar = $allowcalendar;
    
        return $this;
    }

    /**
     * Get allowcalendar
     *
     * @return string 
     */
    public function getAllowcalendar()
    {
        return $this->allowcalendar;
    }

    /**
     * Set allownews
     *
     * @param string $allownews
     * @return Preferences
     */
    public function setAllownews($allownews)
    {
        $this->allownews = $allownews;
    
        return $this;
    }

    /**
     * Get allownews
     *
     * @return string 
     */
    public function getAllownews()
    {
        return $this->allownews;
    }

    /**
     * Set allowprofile
     *
     * @param string $allowprofile
     * @return Preferences
     */
    public function setAllowprofile($allowprofile)
    {
        $this->allowprofile = $allowprofile;
    
        return $this;
    }

    /**
     * Get allowprofile
     *
     * @return string 
     */
    public function getAllowprofile()
    {
        return $this->allowprofile;
    }

    /**
     * Set theme
     *
     * @param string $theme
     * @return Preferences
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    
        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set mode
     *
     * @param string $mode
     * @return Preferences
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    
        return $this;
    }

    /**
     * Get mode
     *
     * @return string 
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set home
     *
     * @param string $home
     * @return Preferences
     */
    public function setHome($home)
    {
        $this->home = $home;
    
        return $this;
    }

    /**
     * Get home
     *
     * @return string 
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * Set menuhome
     *
     * @param string $menuhome
     * @return Preferences
     */
    public function setMenuhome($menuhome)
    {
        $this->menuhome = $menuhome;
    
        return $this;
    }

    /**
     * Get menuhome
     *
     * @return string 
     */
    public function getMenuhome()
    {
        return $this->menuhome;
    }

    /**
     * Set menubrewblogs
     *
     * @param string $menubrewblogs
     * @return Preferences
     */
    public function setMenubrewblogs($menubrewblogs)
    {
        $this->menubrewblogs = $menubrewblogs;
    
        return $this;
    }

    /**
     * Get menubrewblogs
     *
     * @return string 
     */
    public function getMenubrewblogs()
    {
        return $this->menubrewblogs;
    }

    /**
     * Set menurecipes
     *
     * @param string $menurecipes
     * @return Preferences
     */
    public function setMenurecipes($menurecipes)
    {
        $this->menurecipes = $menurecipes;
    
        return $this;
    }

    /**
     * Get menurecipes
     *
     * @return string 
     */
    public function getMenurecipes()
    {
        return $this->menurecipes;
    }

    /**
     * Set menuawards
     *
     * @param string $menuawards
     * @return Preferences
     */
    public function setMenuawards($menuawards)
    {
        $this->menuawards = $menuawards;
    
        return $this;
    }

    /**
     * Get menuawards
     *
     * @return string 
     */
    public function getMenuawards()
    {
        return $this->menuawards;
    }

    /**
     * Set menuabout
     *
     * @param string $menuabout
     * @return Preferences
     */
    public function setMenuabout($menuabout)
    {
        $this->menuabout = $menuabout;
    
        return $this;
    }

    /**
     * Get menuabout
     *
     * @return string 
     */
    public function getMenuabout()
    {
        return $this->menuabout;
    }

    /**
     * Set menureference
     *
     * @param string $menureference
     * @return Preferences
     */
    public function setMenureference($menureference)
    {
        $this->menureference = $menureference;
    
        return $this;
    }

    /**
     * Get menureference
     *
     * @return string 
     */
    public function getMenureference()
    {
        return $this->menureference;
    }

    /**
     * Set menucalculators
     *
     * @param string $menucalculators
     * @return Preferences
     */
    public function setMenucalculators($menucalculators)
    {
        $this->menucalculators = $menucalculators;
    
        return $this;
    }

    /**
     * Get menucalculators
     *
     * @return string 
     */
    public function getMenucalculators()
    {
        return $this->menucalculators;
    }

    /**
     * Set menucalendar
     *
     * @param string $menucalendar
     * @return Preferences
     */
    public function setMenucalendar($menucalendar)
    {
        $this->menucalendar = $menucalendar;
    
        return $this;
    }

    /**
     * Get menucalendar
     *
     * @return string 
     */
    public function getMenucalendar()
    {
        return $this->menucalendar;
    }

    /**
     * Set menulogin
     *
     * @param string $menulogin
     * @return Preferences
     */
    public function setMenulogin($menulogin)
    {
        $this->menulogin = $menulogin;
    
        return $this;
    }

    /**
     * Get menulogin
     *
     * @return string 
     */
    public function getMenulogin()
    {
        return $this->menulogin;
    }

    /**
     * Set menulogout
     *
     * @param string $menulogout
     * @return Preferences
     */
    public function setMenulogout($menulogout)
    {
        $this->menulogout = $menulogout;
    
        return $this;
    }

    /**
     * Get menulogout
     *
     * @return string 
     */
    public function getMenulogout()
    {
        return $this->menulogout;
    }

    /**
     * Set menumembers
     *
     * @param string $menumembers
     * @return Preferences
     */
    public function setMenumembers($menumembers)
    {
        $this->menumembers = $menumembers;
    
        return $this;
    }

    /**
     * Get menumembers
     *
     * @return string 
     */
    public function getMenumembers()
    {
        return $this->menumembers;
    }

    /**
     * Set mashdisplaymethod
     *
     * @param string $mashdisplaymethod
     * @return Preferences
     */
    public function setMashdisplaymethod($mashdisplaymethod)
    {
        $this->mashdisplaymethod = $mashdisplaymethod;
    
        return $this;
    }

    /**
     * Get mashdisplaymethod
     *
     * @return string 
     */
    public function getMashdisplaymethod()
    {
        return $this->mashdisplaymethod;
    }

    /**
     * Set waterdisplaymethod
     *
     * @param string $waterdisplaymethod
     * @return Preferences
     */
    public function setWaterdisplaymethod($waterdisplaymethod)
    {
        $this->waterdisplaymethod = $waterdisplaymethod;
    
        return $this;
    }

    /**
     * Get waterdisplaymethod
     *
     * @return string 
     */
    public function getWaterdisplaymethod()
    {
        return $this->waterdisplaymethod;
    }

    /**
     * Set hoppelletfactor
     *
     * @param float $hoppelletfactor
     * @return Preferences
     */
    public function setHoppelletfactor($hoppelletfactor)
    {
        $this->hoppelletfactor = $hoppelletfactor;
    
        return $this;
    }

    /**
     * Get hoppelletfactor
     *
     * @return float 
     */
    public function getHoppelletfactor()
    {
        return $this->hoppelletfactor;
    }
}