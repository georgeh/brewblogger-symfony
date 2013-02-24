<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="user_name", type="string", length=20, nullable=false)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=250, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="realFirstName", type="string", length=250, nullable=true)
     */
    private $realfirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="realLastName", type="string", length=250, nullable=true)
     */
    private $reallastname;

    /**
     * @var string
     *
     * @ORM\Column(name="userLevel", type="string", length=1, nullable=true)
     */
    private $userlevel;

    /**
     * @var string
     *
     * @ORM\Column(name="userProfile", type="text", nullable=true)
     */
    private $userprofile;

    /**
     * @var string
     *
     * @ORM\Column(name="userPicURL", type="string", length=250, nullable=true)
     */
    private $userpicurl;

    /**
     * @var string
     *
     * @ORM\Column(name="userFavStyles", type="text", nullable=true)
     */
    private $userfavstyles;

    /**
     * @var string
     *
     * @ORM\Column(name="userFavCommercial", type="string", length=250, nullable=true)
     */
    private $userfavcommercial;

    /**
     * @var string
     *
     * @ORM\Column(name="userFavQuote", type="text", nullable=true)
     */
    private $userfavquote;

    /**
     * @var string
     *
     * @ORM\Column(name="userDesignations", type="text", nullable=true)
     */
    private $userdesignations;

    /**
     * @var string
     *
     * @ORM\Column(name="userOccupation", type="string", length=250, nullable=true)
     */
    private $useroccupation;

    /**
     * @var string
     *
     * @ORM\Column(name="userHobbies", type="text", nullable=true)
     */
    private $userhobbies;

    /**
     * @var string
     *
     * @ORM\Column(name="userBirthdate", type="string", length=250, nullable=true)
     */
    private $userbirthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="userHometown", type="string", length=250, nullable=true)
     */
    private $userhometown;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="userBrewingSince", type="date", nullable=true)
     */
    private $userbrewingsince;

    /**
     * @var string
     *
     * @ORM\Column(name="userWebsiteName", type="string", length=250, nullable=true)
     */
    private $userwebsitename;

    /**
     * @var string
     *
     * @ORM\Column(name="userWebsiteURL", type="string", length=250, nullable=true)
     */
    private $userwebsiteurl;

    /**
     * @var string
     *
     * @ORM\Column(name="userInfoPrivate", type="string", length=1, nullable=true)
     */
    private $userinfoprivate;

    /**
     * @var string
     *
     * @ORM\Column(name="userPosition", type="string", length=250, nullable=true)
     */
    private $userposition;

    /**
     * @var string
     *
     * @ORM\Column(name="userPastPosition", type="string", length=250, nullable=true)
     */
    private $userpastposition;

    /**
     * @var string
     *
     * @ORM\Column(name="userAddress", type="string", length=250, nullable=true)
     */
    private $useraddress;

    /**
     * @var string
     *
     * @ORM\Column(name="userCity", type="string", length=250, nullable=true)
     */
    private $usercity;

    /**
     * @var string
     *
     * @ORM\Column(name="userState", type="string", length=250, nullable=true)
     */
    private $userstate;

    /**
     * @var string
     *
     * @ORM\Column(name="userZip", type="string", length=15, nullable=true)
     */
    private $userzip;

    /**
     * @var string
     *
     * @ORM\Column(name="userPhoneH", type="string", length=15, nullable=true)
     */
    private $userphoneh;

    /**
     * @var string
     *
     * @ORM\Column(name="userPhoneW", type="string", length=15, nullable=true)
     */
    private $userphonew;

    /**
     * @var string
     *
     * @ORM\Column(name="userEmail", type="string", length=250, nullable=true)
     */
    private $useremail;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaultBoilTime", type="integer", nullable=true)
     */
    private $defaultboiltime;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaultEquipProfile", type="integer", nullable=true)
     */
    private $defaultequipprofile;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaultMashProfile", type="integer", nullable=true)
     */
    private $defaultmashprofile;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaultWaterProfile", type="integer", nullable=true)
     */
    private $defaultwaterprofile;

    /**
     * @var string
     *
     * @ORM\Column(name="defaultBitternessFormula", type="string", length=50, nullable=false)
     */
    private $defaultbitternessformula;

    /**
     * @var string
     *
     * @ORM\Column(name="defaultMethod", type="string", length=255, nullable=true)
     */
    private $defaultmethod;

    /**
     * @var integer
     *
     * @ORM\Column(name="defaultBatchSize", type="integer", nullable=true)
     */
    private $defaultbatchsize;

    /**
     * @var string
     *
     * @ORM\Column(name="defaultWaterRatio", type="string", length=8, nullable=true)
     */
    private $defaultwaterratio;

    /**
     * @var string
     *
     * @ORM\Column(name="defaultColorFormula", type="string", length=50, nullable=false)
     */
    private $defaultcolorformula;



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
     * Set userName
     *
     * @param string $userName
     * @return Users
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    
        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set realfirstname
     *
     * @param string $realfirstname
     * @return Users
     */
    public function setRealfirstname($realfirstname)
    {
        $this->realfirstname = $realfirstname;
    
        return $this;
    }

    /**
     * Get realfirstname
     *
     * @return string 
     */
    public function getRealfirstname()
    {
        return $this->realfirstname;
    }

    /**
     * Set reallastname
     *
     * @param string $reallastname
     * @return Users
     */
    public function setReallastname($reallastname)
    {
        $this->reallastname = $reallastname;
    
        return $this;
    }

    /**
     * Get reallastname
     *
     * @return string 
     */
    public function getReallastname()
    {
        return $this->reallastname;
    }

    /**
     * Set userlevel
     *
     * @param string $userlevel
     * @return Users
     */
    public function setUserlevel($userlevel)
    {
        $this->userlevel = $userlevel;
    
        return $this;
    }

    /**
     * Get userlevel
     *
     * @return string 
     */
    public function getUserlevel()
    {
        return $this->userlevel;
    }

    /**
     * Set userprofile
     *
     * @param string $userprofile
     * @return Users
     */
    public function setUserprofile($userprofile)
    {
        $this->userprofile = $userprofile;
    
        return $this;
    }

    /**
     * Get userprofile
     *
     * @return string 
     */
    public function getUserprofile()
    {
        return $this->userprofile;
    }

    /**
     * Set userpicurl
     *
     * @param string $userpicurl
     * @return Users
     */
    public function setUserpicurl($userpicurl)
    {
        $this->userpicurl = $userpicurl;
    
        return $this;
    }

    /**
     * Get userpicurl
     *
     * @return string 
     */
    public function getUserpicurl()
    {
        return $this->userpicurl;
    }

    /**
     * Set userfavstyles
     *
     * @param string $userfavstyles
     * @return Users
     */
    public function setUserfavstyles($userfavstyles)
    {
        $this->userfavstyles = $userfavstyles;
    
        return $this;
    }

    /**
     * Get userfavstyles
     *
     * @return string 
     */
    public function getUserfavstyles()
    {
        return $this->userfavstyles;
    }

    /**
     * Set userfavcommercial
     *
     * @param string $userfavcommercial
     * @return Users
     */
    public function setUserfavcommercial($userfavcommercial)
    {
        $this->userfavcommercial = $userfavcommercial;
    
        return $this;
    }

    /**
     * Get userfavcommercial
     *
     * @return string 
     */
    public function getUserfavcommercial()
    {
        return $this->userfavcommercial;
    }

    /**
     * Set userfavquote
     *
     * @param string $userfavquote
     * @return Users
     */
    public function setUserfavquote($userfavquote)
    {
        $this->userfavquote = $userfavquote;
    
        return $this;
    }

    /**
     * Get userfavquote
     *
     * @return string 
     */
    public function getUserfavquote()
    {
        return $this->userfavquote;
    }

    /**
     * Set userdesignations
     *
     * @param string $userdesignations
     * @return Users
     */
    public function setUserdesignations($userdesignations)
    {
        $this->userdesignations = $userdesignations;
    
        return $this;
    }

    /**
     * Get userdesignations
     *
     * @return string 
     */
    public function getUserdesignations()
    {
        return $this->userdesignations;
    }

    /**
     * Set useroccupation
     *
     * @param string $useroccupation
     * @return Users
     */
    public function setUseroccupation($useroccupation)
    {
        $this->useroccupation = $useroccupation;
    
        return $this;
    }

    /**
     * Get useroccupation
     *
     * @return string 
     */
    public function getUseroccupation()
    {
        return $this->useroccupation;
    }

    /**
     * Set userhobbies
     *
     * @param string $userhobbies
     * @return Users
     */
    public function setUserhobbies($userhobbies)
    {
        $this->userhobbies = $userhobbies;
    
        return $this;
    }

    /**
     * Get userhobbies
     *
     * @return string 
     */
    public function getUserhobbies()
    {
        return $this->userhobbies;
    }

    /**
     * Set userbirthdate
     *
     * @param string $userbirthdate
     * @return Users
     */
    public function setUserbirthdate($userbirthdate)
    {
        $this->userbirthdate = $userbirthdate;
    
        return $this;
    }

    /**
     * Get userbirthdate
     *
     * @return string 
     */
    public function getUserbirthdate()
    {
        return $this->userbirthdate;
    }

    /**
     * Set userhometown
     *
     * @param string $userhometown
     * @return Users
     */
    public function setUserhometown($userhometown)
    {
        $this->userhometown = $userhometown;
    
        return $this;
    }

    /**
     * Get userhometown
     *
     * @return string 
     */
    public function getUserhometown()
    {
        return $this->userhometown;
    }

    /**
     * Set userbrewingsince
     *
     * @param \DateTime $userbrewingsince
     * @return Users
     */
    public function setUserbrewingsince($userbrewingsince)
    {
        $this->userbrewingsince = $userbrewingsince;
    
        return $this;
    }

    /**
     * Get userbrewingsince
     *
     * @return \DateTime 
     */
    public function getUserbrewingsince()
    {
        return $this->userbrewingsince;
    }

    /**
     * Set userwebsitename
     *
     * @param string $userwebsitename
     * @return Users
     */
    public function setUserwebsitename($userwebsitename)
    {
        $this->userwebsitename = $userwebsitename;
    
        return $this;
    }

    /**
     * Get userwebsitename
     *
     * @return string 
     */
    public function getUserwebsitename()
    {
        return $this->userwebsitename;
    }

    /**
     * Set userwebsiteurl
     *
     * @param string $userwebsiteurl
     * @return Users
     */
    public function setUserwebsiteurl($userwebsiteurl)
    {
        $this->userwebsiteurl = $userwebsiteurl;
    
        return $this;
    }

    /**
     * Get userwebsiteurl
     *
     * @return string 
     */
    public function getUserwebsiteurl()
    {
        return $this->userwebsiteurl;
    }

    /**
     * Set userinfoprivate
     *
     * @param string $userinfoprivate
     * @return Users
     */
    public function setUserinfoprivate($userinfoprivate)
    {
        $this->userinfoprivate = $userinfoprivate;
    
        return $this;
    }

    /**
     * Get userinfoprivate
     *
     * @return string 
     */
    public function getUserinfoprivate()
    {
        return $this->userinfoprivate;
    }

    /**
     * Set userposition
     *
     * @param string $userposition
     * @return Users
     */
    public function setUserposition($userposition)
    {
        $this->userposition = $userposition;
    
        return $this;
    }

    /**
     * Get userposition
     *
     * @return string 
     */
    public function getUserposition()
    {
        return $this->userposition;
    }

    /**
     * Set userpastposition
     *
     * @param string $userpastposition
     * @return Users
     */
    public function setUserpastposition($userpastposition)
    {
        $this->userpastposition = $userpastposition;
    
        return $this;
    }

    /**
     * Get userpastposition
     *
     * @return string 
     */
    public function getUserpastposition()
    {
        return $this->userpastposition;
    }

    /**
     * Set useraddress
     *
     * @param string $useraddress
     * @return Users
     */
    public function setUseraddress($useraddress)
    {
        $this->useraddress = $useraddress;
    
        return $this;
    }

    /**
     * Get useraddress
     *
     * @return string 
     */
    public function getUseraddress()
    {
        return $this->useraddress;
    }

    /**
     * Set usercity
     *
     * @param string $usercity
     * @return Users
     */
    public function setUsercity($usercity)
    {
        $this->usercity = $usercity;
    
        return $this;
    }

    /**
     * Get usercity
     *
     * @return string 
     */
    public function getUsercity()
    {
        return $this->usercity;
    }

    /**
     * Set userstate
     *
     * @param string $userstate
     * @return Users
     */
    public function setUserstate($userstate)
    {
        $this->userstate = $userstate;
    
        return $this;
    }

    /**
     * Get userstate
     *
     * @return string 
     */
    public function getUserstate()
    {
        return $this->userstate;
    }

    /**
     * Set userzip
     *
     * @param string $userzip
     * @return Users
     */
    public function setUserzip($userzip)
    {
        $this->userzip = $userzip;
    
        return $this;
    }

    /**
     * Get userzip
     *
     * @return string 
     */
    public function getUserzip()
    {
        return $this->userzip;
    }

    /**
     * Set userphoneh
     *
     * @param string $userphoneh
     * @return Users
     */
    public function setUserphoneh($userphoneh)
    {
        $this->userphoneh = $userphoneh;
    
        return $this;
    }

    /**
     * Get userphoneh
     *
     * @return string 
     */
    public function getUserphoneh()
    {
        return $this->userphoneh;
    }

    /**
     * Set userphonew
     *
     * @param string $userphonew
     * @return Users
     */
    public function setUserphonew($userphonew)
    {
        $this->userphonew = $userphonew;
    
        return $this;
    }

    /**
     * Get userphonew
     *
     * @return string 
     */
    public function getUserphonew()
    {
        return $this->userphonew;
    }

    /**
     * Set useremail
     *
     * @param string $useremail
     * @return Users
     */
    public function setUseremail($useremail)
    {
        $this->useremail = $useremail;
    
        return $this;
    }

    /**
     * Get useremail
     *
     * @return string 
     */
    public function getUseremail()
    {
        return $this->useremail;
    }

    /**
     * Set defaultboiltime
     *
     * @param integer $defaultboiltime
     * @return Users
     */
    public function setDefaultboiltime($defaultboiltime)
    {
        $this->defaultboiltime = $defaultboiltime;
    
        return $this;
    }

    /**
     * Get defaultboiltime
     *
     * @return integer 
     */
    public function getDefaultboiltime()
    {
        return $this->defaultboiltime;
    }

    /**
     * Set defaultequipprofile
     *
     * @param integer $defaultequipprofile
     * @return Users
     */
    public function setDefaultequipprofile($defaultequipprofile)
    {
        $this->defaultequipprofile = $defaultequipprofile;
    
        return $this;
    }

    /**
     * Get defaultequipprofile
     *
     * @return integer 
     */
    public function getDefaultequipprofile()
    {
        return $this->defaultequipprofile;
    }

    /**
     * Set defaultmashprofile
     *
     * @param integer $defaultmashprofile
     * @return Users
     */
    public function setDefaultmashprofile($defaultmashprofile)
    {
        $this->defaultmashprofile = $defaultmashprofile;
    
        return $this;
    }

    /**
     * Get defaultmashprofile
     *
     * @return integer 
     */
    public function getDefaultmashprofile()
    {
        return $this->defaultmashprofile;
    }

    /**
     * Set defaultwaterprofile
     *
     * @param integer $defaultwaterprofile
     * @return Users
     */
    public function setDefaultwaterprofile($defaultwaterprofile)
    {
        $this->defaultwaterprofile = $defaultwaterprofile;
    
        return $this;
    }

    /**
     * Get defaultwaterprofile
     *
     * @return integer 
     */
    public function getDefaultwaterprofile()
    {
        return $this->defaultwaterprofile;
    }

    /**
     * Set defaultbitternessformula
     *
     * @param string $defaultbitternessformula
     * @return Users
     */
    public function setDefaultbitternessformula($defaultbitternessformula)
    {
        $this->defaultbitternessformula = $defaultbitternessformula;
    
        return $this;
    }

    /**
     * Get defaultbitternessformula
     *
     * @return string 
     */
    public function getDefaultbitternessformula()
    {
        return $this->defaultbitternessformula;
    }

    /**
     * Set defaultmethod
     *
     * @param string $defaultmethod
     * @return Users
     */
    public function setDefaultmethod($defaultmethod)
    {
        $this->defaultmethod = $defaultmethod;
    
        return $this;
    }

    /**
     * Get defaultmethod
     *
     * @return string 
     */
    public function getDefaultmethod()
    {
        return $this->defaultmethod;
    }

    /**
     * Set defaultbatchsize
     *
     * @param integer $defaultbatchsize
     * @return Users
     */
    public function setDefaultbatchsize($defaultbatchsize)
    {
        $this->defaultbatchsize = $defaultbatchsize;
    
        return $this;
    }

    /**
     * Get defaultbatchsize
     *
     * @return integer 
     */
    public function getDefaultbatchsize()
    {
        return $this->defaultbatchsize;
    }

    /**
     * Set defaultwaterratio
     *
     * @param string $defaultwaterratio
     * @return Users
     */
    public function setDefaultwaterratio($defaultwaterratio)
    {
        $this->defaultwaterratio = $defaultwaterratio;
    
        return $this;
    }

    /**
     * Get defaultwaterratio
     *
     * @return string 
     */
    public function getDefaultwaterratio()
    {
        return $this->defaultwaterratio;
    }

    /**
     * Set defaultcolorformula
     *
     * @param string $defaultcolorformula
     * @return Users
     */
    public function setDefaultcolorformula($defaultcolorformula)
    {
        $this->defaultcolorformula = $defaultcolorformula;
    
        return $this;
    }

    /**
     * Get defaultcolorformula
     *
     * @return string 
     */
    public function getDefaultcolorformula()
    {
        return $this->defaultcolorformula;
    }
}