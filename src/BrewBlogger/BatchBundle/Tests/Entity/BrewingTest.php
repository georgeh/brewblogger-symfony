<?php
namespace BrewBlogger\BatchBundle\Tests\Entity;

use BrewBlogger\BatchBundle\Entity;

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

        $brewing->setGrain1('American Pale Malt (2-Row)');        
        $brewing->setGrain1weight("18.00");
        $brewing->setGrain2("German Light Munich Malt");
        $brewing->setGrain2weight("4.00");
        $brewing->setGrain3("Crystal Malt 40L" );
        $brewing->setGrain3weight("0.25");
        
        $grains = $brewing->getGrains();
        $this->assertEquals(3, count($grains));
        $this->assertArrayHasKey('Name', $grains[0]);
        $this->assertArrayHasKey('Weight', $grains[1]);
        $this->assertArrayHasKey('Percentage', $grains[2]);
        $this->assertEquals(0.809, $grains[0]['Percentage']);
        $this->assertEquals("German Light Munich Malt", $grains[1]['Name']);
        $this->assertEquals("0.25", $grains[2]['Weight']);
        
        $this->assertEquals(22.25, $brewing->getTotalGrainWeight());
    }
    
    public function testMiscAggregator()
    {
        $brewing = new Entity\Brewing();
        
        $brewing->setMisc1amount('1/2 tsp.');
        $brewing->setMisc1name('Fermcap');
        $brewing->setMisc1time('60');

        $brewing->setMisc3amount('1 tablet');
        $brewing->setMisc3name('Whirlfloc');
        $brewing->setMisc3time('15');
        
        $misc = $brewing->getMiscIngredients();
        
        $this->assertEquals(2, count($misc));
        $this->assertEquals('1 tablet', $misc[1]['Amount']);
        $this->assertEquals('Fermcap', $misc[0]['Name']);
        $this->assertEquals('15', $misc[1]['Time']);
    }
    
    public function testAdjunctAggregator()
    {
        $brewing = new Entity\Brewing();
        
        $brewing->setAddition3('Sucrose (Table Sugar)');
        $brewing->setAddition3amt('2.00');

        $brewing->setAddition8('Brown Sugar (Dark)');
        $brewing->setAddition8amt('0.50');
        
        $adjuncts = $brewing->getAdjuncts();
        $this->assertEquals(2, count($adjuncts));
        $this->assertEquals('Brown Sugar (Dark)', $adjuncts[1]['Name']);
        $this->assertEquals(2, $adjuncts[0]['Amount']);

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