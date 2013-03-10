<?php

namespace BrewBlogger\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Upcoming
 *
 * @ORM\Table(name="upcoming")
 * @ORM\Entity
 */
class Upcoming
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
     * @ORM\Column(name="upcoming", type="string", length=250, nullable=true)
     */
    private $upcoming;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="upcomingDate", type="date", nullable=true)
     */
    private $upcomingdate;

    /**
     * @var string
     *
     * @ORM\Column(name="upcomingRecipeID", type="string", length=10, nullable=true)
     */
    private $upcomingrecipeid;

    /**
     * @var string
     *
     * @ORM\Column(name="brewBrewerID", type="string", length=250, nullable=true)
     */
    private $brewbrewerid;



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
     * Set upcoming
     *
     * @param string $upcoming
     * @return Upcoming
     */
    public function setUpcoming($upcoming)
    {
        $this->upcoming = $upcoming;
    
        return $this;
    }

    /**
     * Get upcoming
     *
     * @return string 
     */
    public function getUpcoming()
    {
        return $this->upcoming;
    }

    /**
     * Set upcomingdate
     *
     * @param \DateTime $upcomingdate
     * @return Upcoming
     */
    public function setDate($upcomingdate)
    {
        $this->upcomingdate = $upcomingdate;
    
        return $this;
    }

    /**
     * Get upcomingdate
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->upcomingdate;
    }

    /**
     * Set upcomingrecipeid
     *
     * @param string $upcomingrecipeid
     * @return Upcoming
     */
    public function setRecipeID($upcomingrecipeid)
    {
        $this->upcomingrecipeid = $upcomingrecipeid;
    
        return $this;
    }

    /**
     * Get upcomingrecipeid
     *
     * @return string 
     */
    public function getRecipeID()
    {
        return $this->upcomingrecipeid;
    }

    /**
     * Set brewbrewerid
     *
     * @param string $brewbrewerid
     * @return Upcoming
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
}