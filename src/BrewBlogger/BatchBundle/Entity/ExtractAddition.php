<?php

namespace BrewBlogger\BatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BrewBlogger\BatchBundle\Entity\Brewing;

/**
 * ExtractAddition
 *
 * @ORM\Table(name="extract_addition")
 * @ORM\Entity
 */
class ExtractAddition
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
     * Weight of the extract in pounds
     * @var float
     *
     * @ORM\Column(name="weight", type="float", nullable=true)
     */
    private $weight;
    
    /**
     * @var Extract
     * 
     * @ORM\ManyToOne(targetEntity="Extract")
     * @ORM\JoinColumn(name="extract_id", referencedColumnName="id")
     */
    private $extract;
    
        
    /**
     * @var Brewing
     * 
     * @ORM\ManyToOne(targetEntity="Brewing", inversedBy="extractAdditions")
     * @ORM\JoinColumn(name="brewing_id", referencedColumnName="id")
     */
    private $batch;

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param $id
     * @return ExtractAddition
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param $name
     * @return ExtractAddition
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight() {
        return $this->weight;
    }

    /**
     * @param $weight
     * @return ExtractAddition
     */
    public function setWeight($weight) {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return Extract
     */
    public function getExtract() {
        return $this->extract;
    }

    /**
     * @param Extract $extract
     * @return ExtractAddition
     */
    public function setExtract(Extract $extract) {
        $this->extract = $extract;
        return $this;
    }

    /**
     * @param \BrewBlogger\BatchBundle\Entity\Brewing $batch
     */
    public function setBatch($batch)
    {
        $this->batch = $batch;
    }

    /**
     * @return \BrewBlogger\BatchBundle\Entity\Brewing
     */
    public function getBatch()
    {
        return $this->batch;
    }


}