<?php
namespace BrewBlogger\CoreBundle\Tests\Entity;

use BrewBlogger\CoreBundle\Entity;

class BrewingTest extends \PHPUnit_Framework_TestCase
{
    public function testBUGU()
    {
        $brewing = new Entity\Brewing();
        
        $brewing->setBitterness(50);
        $brewing->setOG(1.100);
        $this->assertEquals(.5, $brewing->getBUGU());
        
        // Divide by zero
        $brewing->setOG(1);
        $this->assertNull($brewing->getBUGU());
    }
    
    public function testCalories()
    {
        $brewing = new Entity\Brewing();
        
        $brewing->setOG(1.068);
        $brewing->setFG(1.005);
        $this->assertEquals(220, $brewing->getCalories());
    }
    
    public function testABW()
    {
        $brewing = new Entity\Brewing();
        
        $brewing->setOG(1.068);
        $brewing->setFG(1.005);
        $this->assertEquals(6.6, $brewing->getABW());
    }
    
    public function testExtract()
    {
        $brewing = new Entity\Brewing();
        
        $brewing->setOG(1.068);
        $brewing->setFG(1.005);
        $this->assertEquals(4.1, $brewing->getRealExtract());
    }
    
    public function testPlato()
    {
        $brewing = new Entity\Brewing();
        
        $this->assertEquals(16.6, $brewing->convertGravityToPlato(1.068));
    }
    
    public function testABV()
    {
        $brewing = new Entity\Brewing();
        
        $brewing->setOG(1.068);
        $brewing->setFG(1.005);
        $this->assertEquals(8.4, $brewing->getABV());
    }
    
    public function testAttenuation()
    {
        $brewing = new Entity\Brewing();
        
        $brewing->setOG(1.068);
        $brewing->setFG(1.005);
        $this->assertEquals(92.2, $brewing->getApparentAttenuation());
        $this->assertEquals(75.3, $brewing->getRealAttenuation());
    }
    
    public function testGrainAggregator()
    {
        $brewing = new Entity\Brewing();
        $grains = $brewing->getGrains();
        
        $grain = new Entity\GrainAddition();
        $grain->setName('American Pale Malt (2-Row)')
                ->setWeight(18)
                ->setBatch($brewing);
        $grains->add($grain);

        $grain = new Entity\GrainAddition();
        $grain->setName('German Light Munich Malt')
                ->setWeight("4.00")
                ->setBatch($brewing);
        $grains->add($grain);

        $grain = new Entity\GrainAddition();
        $grain->setName('Crystal Malt 40L')
                ->setWeight(0.25)
                ->setBatch($brewing);
        $grains->add($grain);

        $this->assertEquals(3, count($grains));
        $this->assertEquals(22.25, $brewing->getTotalGrainWeight());
        
        $this->assertEquals(0.809, $grains[0]->getGristPercentage(), '', 0.0001);
        $this->assertEquals("German Light Munich Malt", $grains[1]->getName('Name'));
        $this->assertEquals("0.25", $grains[2]->getWeight());

    }
    
    public function testMiscAggregator()
    {
        $brewing = new Entity\Brewing();
        $additions = $brewing->getMiscIngredients();
        
        $misc = new Entity\MiscAddition();
        $misc->setName('Fermcap')
                ->setAmount(('1/2 tsp.'))
                ->setTime(60);
        $additions->add($misc);

        $misc = new Entity\MiscAddition();
        $misc->setName('Whirlfloc')
                ->setAmount(('1 tablet'))
                ->setTime(15);
        $additions->add($misc);
        
        $this->assertEquals(2, count($additions));
        $this->assertEquals('1 tablet', $additions[1]->getAmount());
        $this->assertEquals('Fermcap', $additions[0]->getName());
        $this->assertEquals('15', $additions[1]->getTime());
    }
    
    public function testAdjunctAggregator()
    {
        $brewing = new Entity\Brewing();
        $adjuncts = $brewing->getAdjuncts();
        
        $adjunct = new Entity\AdjunctAddition();
        $adjunct->setName('Sucrose (Table Sugar)')
                ->setWeight(2);
        $adjuncts->add($adjunct);
        
        $adjunct = new Entity\AdjunctAddition();
        $adjunct->setName('Brown Sugar (Dark)')
                ->setWeight(0.50);
        $adjuncts->add($adjunct);

        $this->assertEquals(2, count($adjuncts));
        $this->assertEquals('Brown Sugar (Dark)', $adjuncts[1]->getName());
        $this->assertEquals(2, $adjuncts[0]->getWeight());

    }
    
    public function testHopAggregator()
    {
        $brewing = new Entity\Brewing();

        $hop = new Entity\HopAddition();
        $hop->setAlphaAcid(6.0)
                ->setName('Magnum')
                ->setForm('Whole')
                ->setTime(90)
                ->setPurpose('Bittering')
                ->setUse('Dry Hop')
                ->setWeight(1.35);
        $brewing->getHops()->add($hop);
        
        $hop = new Entity\HopAddition();
        $hop->setAlphaAcid(7.0)
                ->setName('Golding')
                ->setForm('Pellets')
                ->setTime(60)
                ->setPurpose('Aroma')
                ->setUse('Boil')
                ->setWeight(0.65);
        
        $brewing->getHops()->add($hop);

        $hops = $brewing->getHops();
        
        $this->assertEquals(2, count($hops));
        $this->assertEquals('Magnum', $hops[0]->getName());
        $this->assertEquals('Pellets', $hops[1]->getForm());
        $this->assertEquals('6.0', $hops[0]->getAlphaAcid());
        $this->assertEquals(60, $hops[1]->getTime());
        $this->assertEquals('Bittering', $hops[0]->getPurpose());
        $this->assertEquals('Boil', $hops[1]->getUse());
        $this->assertEquals('1.35', $hops[0]->getWeight());
        
        $total = $brewing->getTotalHops();
        $this->assertEquals(2, $total['Weight']);
        $this->assertEquals(12.65, $total['AAU']);
    }
}