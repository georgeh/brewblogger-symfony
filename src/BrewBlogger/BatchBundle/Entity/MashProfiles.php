<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MashProfiles
 *
 * @ORM\Table(name="mash_profiles")
 * @ORM\Entity
 */
class MashProfiles
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
     * @ORM\Column(name="mashProfileName", type="string", length=255, nullable=true)
     */
    private $mashprofilename;

    /**
     * @var string
     *
     * @ORM\Column(name="mashGrainTemp", type="string", length=255, nullable=true)
     */
    private $mashgraintemp;

    /**
     * @var string
     *
     * @ORM\Column(name="mashTunTemp", type="string", length=255, nullable=true)
     */
    private $mashtuntemp;

    /**
     * @var string
     *
     * @ORM\Column(name="mashSpargeTemp", type="string", length=255, nullable=true)
     */
    private $mashspargetemp;

    /**
     * @var string
     *
     * @ORM\Column(name="mashPH", type="string", length=255, nullable=true)
     */
    private $mashph;

    /**
     * @var string
     *
     * @ORM\Column(name="mashEquipAdj", type="string", length=255, nullable=true)
     */
    private $mashequipadj;

    /**
     * @var string
     *
     * @ORM\Column(name="mashNotes", type="text", nullable=true)
     */
    private $mashnotes;

    /**
     * @var string
     *
     * @ORM\Column(name="mashBrewerID", type="string", length=255, nullable=true)
     */
    private $mashbrewerid;



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
     * Set mashprofilename
     *
     * @param string $mashprofilename
     * @return MashProfiles
     */
    public function setMashprofilename($mashprofilename)
    {
        $this->mashprofilename = $mashprofilename;
    
        return $this;
    }

    /**
     * Get mashprofilename
     *
     * @return string 
     */
    public function getMashprofilename()
    {
        return $this->mashprofilename;
    }

    /**
     * Set mashgraintemp
     *
     * @param string $mashgraintemp
     * @return MashProfiles
     */
    public function setMashgraintemp($mashgraintemp)
    {
        $this->mashgraintemp = $mashgraintemp;
    
        return $this;
    }

    /**
     * Get mashgraintemp
     *
     * @return string 
     */
    public function getMashgraintemp()
    {
        return $this->mashgraintemp;
    }

    /**
     * Set mashtuntemp
     *
     * @param string $mashtuntemp
     * @return MashProfiles
     */
    public function setMashtuntemp($mashtuntemp)
    {
        $this->mashtuntemp = $mashtuntemp;
    
        return $this;
    }

    /**
     * Get mashtuntemp
     *
     * @return string 
     */
    public function getMashtuntemp()
    {
        return $this->mashtuntemp;
    }

    /**
     * Set mashspargetemp
     *
     * @param string $mashspargetemp
     * @return MashProfiles
     */
    public function setMashspargetemp($mashspargetemp)
    {
        $this->mashspargetemp = $mashspargetemp;
    
        return $this;
    }

    /**
     * Get mashspargetemp
     *
     * @return string 
     */
    public function getMashspargetemp()
    {
        return $this->mashspargetemp;
    }

    /**
     * Set mashph
     *
     * @param string $mashph
     * @return MashProfiles
     */
    public function setMashph($mashph)
    {
        $this->mashph = $mashph;
    
        return $this;
    }

    /**
     * Get mashph
     *
     * @return string 
     */
    public function getMashph()
    {
        return $this->mashph;
    }

    /**
     * Set mashequipadj
     *
     * @param string $mashequipadj
     * @return MashProfiles
     */
    public function setMashequipadj($mashequipadj)
    {
        $this->mashequipadj = $mashequipadj;
    
        return $this;
    }

    /**
     * Get mashequipadj
     *
     * @return string 
     */
    public function getMashequipadj()
    {
        return $this->mashequipadj;
    }

    /**
     * Set mashnotes
     *
     * @param string $mashnotes
     * @return MashProfiles
     */
    public function setMashnotes($mashnotes)
    {
        $this->mashnotes = $mashnotes;
    
        return $this;
    }

    /**
     * Get mashnotes
     *
     * @return string 
     */
    public function getMashnotes()
    {
        return $this->mashnotes;
    }

    /**
     * Set mashbrewerid
     *
     * @param string $mashbrewerid
     * @return MashProfiles
     */
    public function setMashbrewerid($mashbrewerid)
    {
        $this->mashbrewerid = $mashbrewerid;
    
        return $this;
    }

    /**
     * Get mashbrewerid
     *
     * @return string 
     */
    public function getMashbrewerid()
    {
        return $this->mashbrewerid;
    }
}