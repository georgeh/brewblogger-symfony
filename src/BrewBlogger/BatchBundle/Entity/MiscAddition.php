<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BrewBlogger\BatchBundle\Entity\Brewing;

/**
 * MiscAddition
 *
 * @ORM\Table(name="misc_addition")
 * @ORM\Entity
 */
class MiscAddition
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
     * @var integer
     *
     * @ORM\Column(name="brewing_id", type="integer", nullable=true)
     * @
     */
    private $brewingID;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=true)
     */
    private $name;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=250, nullable=true)
     */
    private $type;
    
    /**
     * @var string
     *
     * @ORM\Column(name="use", type="string", length=250, nullable=true)
     */
    private $use;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=250, nullable=true)
     */
    private $time;
    
    /**
     * Amount to add
     * @var string
     *
     * @ORM\Column(name="weight", type="string", nullable=true)
     */
    private $amount;
    
    /**
     * @var Misc
     * 
     * @ORM\ManyToOne(targetEntity="Misc")
     * @ORM\JoinColumn(name="misc_id", referencedColumnName="id")
     */
    private $misc;
    
    /**
     * @var Brewing
     * 
     * @ORM\ManyToOne(targetEntity="Brewing", inversedBy="miscAdditions")
     * @ORM\JoinColumn(name="brewing_id", referencedColumnName="id")
     */
    private $batch;


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function getUse() {
        return $this->use;
    }

    public function setUse($use) {
        $this->use = $use;
        return $this;
    }

    public function getTime() {
        return $this->time;
    }

    public function setTime($time) {
        $this->time = $time;
        return $this;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    public function getMisc() {
        return $this->misc;
    }

    public function setMisc(Misc $misc) {
        $this->misc = $misc;
        return $this;
    }
    
    public function getBatch() {
        return $this->batch;
    }

    public function setBatch(Brewing $batch) {
        $this->batch = $batch;
        return $this;
    }
}