<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BrewBlogger\BatchBundle\Entity\Brewing;

/**
 * GrainAddition
 *
 * @ORM\Table(name="grain_addition")
 * @ORM\Entity
 */
class GrainAddition
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
     * Weight of the grains in pounds
     * @var float
     *
     * @ORM\Column(name="weight", type="float", nullable=true)
     */
    private $weight;
        
    /**
     * @var Brewing
     * 
     * @ORM\ManyToOne(targetEntity="Brewing", inversedBy="grainAdditions")
     * @ORM\JoinColumn(name="brewing_id", referencedColumnName="id")
     */
    private $batch;
    
    /**
     * @var Malt
     * 
     * @ORM\ManyToOne(targetEntity="Malt")
     * @ORM\JoinColumn(name="malt_id", referencedColumnName="id")
     */
    private $malt;
    
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

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
        return $this;
    }

    public function getBatch() {
        return $this->batch;
    }

    public function setBatch(Brewing $batch) {
        $this->batch = $batch;
        return $this;
    }

    public function getMalt() {
        return $this->malt;
    }

    public function setMalt(Malt $malt) {
        $this->malt = $malt;
        return $this;
    }
    
    /**
     * Calculates what percentage of the total grist this is
     * 
     * @return float
     */
    public function getGristPercentage()
    {
        if (!$this->batch || !$this->batch->getTotalGrainWeight()) {
            return NULL;
        }
        
        return ($this->weight / $this->batch->getTotalGrainWeight());
    }


}