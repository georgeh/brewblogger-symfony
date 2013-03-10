<?php

namespace BrewBlogger\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BrewBlogger\CoreBundle\Entity\Brewing;

/**
 * HopAddition
 *
 * @ORM\Table(name="hop_addition")
 * @ORM\Entity
 */
class HopAddition
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
     * Weight of the hop addition in ounces
     * @var float
     *
     * @ORM\Column(name="weight", type="float", nullable=true)
     */
    private $weight;
    
    /**
     * @var float
     *
     * @ORM\Column(name="alpha_acid", type="float", nullable=true)
     */
    private $alphaAcid;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=true)
     */
    private $time;
    
    /**
     * @var string
     *
     * @ORM\Column(name="purpose", type="string", length=250, nullable=true)
     */
    private $purpose;
    
    /**
     * @var string
     *
     * @ORM\Column(name="added_to", type="string", length=250, nullable=true)
     */
    private $use;
    
    /**
     * @var string
     *
     * @ORM\Column(name="form", type="string", length=250, nullable=true)
     */
    private $form;
    
    /**
     * @var Brewing
     * 
     * @ORM\ManyToOne(targetEntity="Brewing", inversedBy="hopAdditions", cascade={"persist"})
     * @ORM\JoinColumn(name="brewing_id", referencedColumnName="id")
     */
    private $batch;
    
    /**
     * @var Hops
     * 
     * @ORM\ManyToOne(targetEntity="Hops")
     * @ORM\JoinColumn(name="hops_id", referencedColumnName="id")
     */
    private $hop;
    
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

    public function getAlphaAcid() {
        return $this->alphaAcid;
    }

    public function setAlphaAcid($alphaAcid) {
        $this->alphaAcid = $alphaAcid;
        return $this;
    }

    public function getTime() {
        return $this->time;
    }

    public function setTime($time) {
        $this->time = $time;
        return $this;
    }

    public function getPurpose() {
        return $this->purpose;
    }

    public function setPurpose($purpose) {
        $this->purpose = $purpose;
        return $this;
    }

    public function getUse() {
        return $this->use;
    }

    public function setUse($use) {
        $this->use = $use;
        return $this;
    }

    public function getForm() {
        return $this->form;
    }

    public function setForm($form) {
        $this->form = $form;
        return $this;
    }

    /**
     * @return Brewing
     */
    public function getBatch() {
        return $this->batch;
    }

    public function setBatch(Brewing $batch) {
        $this->batch = $batch;
        return $this;
    }

    /**
     * Returns the Alpha Acid Units - alpha acid % * weight in ounces
     * 
     * @return float
     */
    public function getAAU()
    {
        return $this->alphaAcid * $this->weight;
    }

        
    public function __toString() {
        return $this->getName() . ' @ ' . $this->getTime() . ' min.';
    }
}