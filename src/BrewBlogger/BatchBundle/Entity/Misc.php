<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Misc
 *
 * @ORM\Table(name="misc")
 * @ORM\Entity
 */
class Misc
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
     * @ORM\Column(name="miscName", type="string", length=255, nullable=true)
     */
    private $miscname;

    /**
     * @var string
     *
     * @ORM\Column(name="miscType", type="string", length=255, nullable=true)
     */
    private $misctype;

    /**
     * @var string
     *
     * @ORM\Column(name="miscUse", type="string", length=255, nullable=true)
     */
    private $miscuse;

    /**
     * @var string
     *
     * @ORM\Column(name="miscNotes", type="string", length=255, nullable=true)
     */
    private $miscnotes;



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
     * Set miscname
     *
     * @param string $miscname
     * @return Misc
     */
    public function setMiscname($miscname)
    {
        $this->miscname = $miscname;
    
        return $this;
    }

    /**
     * Get miscname
     *
     * @return string 
     */
    public function getMiscname()
    {
        return $this->miscname;
    }

    /**
     * Set misctype
     *
     * @param string $misctype
     * @return Misc
     */
    public function setMisctype($misctype)
    {
        $this->misctype = $misctype;
    
        return $this;
    }

    /**
     * Get misctype
     *
     * @return string 
     */
    public function getMisctype()
    {
        return $this->misctype;
    }

    /**
     * Set miscuse
     *
     * @param string $miscuse
     * @return Misc
     */
    public function setMiscuse($miscuse)
    {
        $this->miscuse = $miscuse;
    
        return $this;
    }

    /**
     * Get miscuse
     *
     * @return string 
     */
    public function getMiscuse()
    {
        return $this->miscuse;
    }

    /**
     * Set miscnotes
     *
     * @param string $miscnotes
     * @return Misc
     */
    public function setMiscnotes($miscnotes)
    {
        $this->miscnotes = $miscnotes;
    
        return $this;
    }

    /**
     * Get miscnotes
     *
     * @return string 
     */
    public function getMiscnotes()
    {
        return $this->miscnotes;
    }
}