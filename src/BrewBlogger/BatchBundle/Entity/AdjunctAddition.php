<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BrewBlogger\BatchBundle\Entity\Brewing;

/**
 * AdjunctAddition
 *
 * @ORM\Table(name="adjunct_addition")
 * @ORM\Entity
 */
class AdjunctAddition
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
     * @ORM\ManyToOne(targetEntity="Brewing", inversedBy="adjunctAdditions")
     * @ORM\JoinColumn(name="brewing_id", referencedColumnName="id")
     */
    private $batch;
    
    /**
     * @var Adjuncts
     * 
     * @ORM\ManyToOne(targetEntity="Adjuncts")
     * @ORM\JoinColumn(name="adjunct_id", referencedColumnName="id")
     */
    private $adjunct;
    
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

    public function getAdjunct() {
        return $this->adjunct;
    }

    public function setAdjunct(Adjuncts $adjunct) {
        $this->adjunct = $adjunct;
        return $this;
    }


}