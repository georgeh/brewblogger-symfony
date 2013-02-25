<?php
namespace BrewBlogger\BatchBundle\Tests\Entity;

use BrewBlogger\BatchBundle\Entity;

class BrewingTest extends \PHPUnit_Framework_TestCase
{
    public function testBUGU()
    {
        $brewing = new Entity\Brewing();
        
        $brewing->setBrewbitterness(50);
        $brewing->setBrewog(1.100);
        $this->assertEquals(.5, $brewing->getBUGU());
        
        // Divide by zero
        $brewing->setBrewog(1);
        $this->assertNull($brewing->getBUGU());
    }
    
    public function testCalories()
    {
        $brewing = new Entity\Brewing();
        
        $brewing->setBrewog(1.068);
        $brewing->setBrewfg(1.005);
        $this->assertEquals(220, $brewing->getCalories());
    }
    
    public function testABW()
    {
        $brewing = new Entity\Brewing();
        
        $brewing->setBrewog(1.068);
        $brewing->setBrewfg(1.005);
        $this->assertEquals(6.6, $brewing->getABW());
    }
    
    public function testExtract()
    {
        $brewing = new Entity\Brewing();
        
        $brewing->setBrewog(1.068);
        $brewing->setBrewfg(1.005);
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
        
        $brewing->setBrewog(1.068);
        $brewing->setBrewfg(1.005);
        $this->assertEquals(8.4, $brewing->getABV());
    }
    
    public function testAttenuation()
    {
        $brewing = new Entity\Brewing();
        
        $brewing->setBrewog(1.068);
        $brewing->setBrewfg(1.005);
        $this->assertEquals(92.2, $brewing->getApparentAttenuation());
        $this->assertEquals(75.3, $brewing->getRealAttenuation());
    }
    
    public function testGrainAggregator()
    {
        $brewing = new Entity\Brewing();

        $brewing->setBrewgrain1('American Pale Malt (2-Row)');        
        $brewing->setBrewgrain1weight("18.00");
        $brewing->setBrewgrain2("German Light Munich Malt");
        $brewing->setBrewgrain2weight("4.00");
        $brewing->setBrewgrain3("Crystal Malt 40L" );
        $brewing->setBrewgrain3weight("0.25");
        
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
        
        $brewing->setBrewmisc1amount('1/2 tsp.');
        $brewing->setBrewmisc1name('Fermcap');
        $brewing->setBrewmisc1time('60');

        $brewing->setBrewmisc3amount('1 tablet');
        $brewing->setBrewmisc3name('Whirlfloc');
        $brewing->setBrewmisc3time('15');
        
        $misc = $brewing->getMiscIngredients();
        
        $this->assertEquals(2, count($misc));
        $this->assertEquals('1 tablet', $misc[1]['Amount']);
        $this->assertEquals('Fermcap', $misc[0]['Name']);
        $this->assertEquals('15', $misc[1]['Time']);
    }
    
    public function testAdjunctAggregator()
    {
        $brewing = new Entity\Brewing();
        
        $brewing->setBrewaddition3('Sucrose (Table Sugar)');
        $brewing->setBrewaddition3amt('2.00');

        $brewing->setBrewaddition8('Brown Sugar (Dark)');
        $brewing->setBrewaddition8amt('0.50');
        
        $adjuncts = $brewing->getAdjuncts();
        $this->assertEquals(2, count($adjuncts));
        $this->assertEquals('Brown Sugar (Dark)', $adjuncts[1]['Name']);
        $this->assertEquals(2, $adjuncts[0]['Amount']);

    }
    
    public function testHopAggregator()
    {
        $brewing = new Entity\Brewing();
        
        $brewing->setBrewhops2('Golding')
                ->setBrewhops2form('Pellets')
                ->setBrewhops2ibu('7.0')
                ->setBrewhops2time('60')
                ->setBrewhops2type('Aroma')
                ->setBrewhops2use('Boil')
                ->setBrewhops2weight('0.65');
                
        // Yes these are in reverse order, shouldn't matter with the current setter API
        $brewing->setBrewhops1('Magnum')
                ->setBrewhops1form('Whole')
                ->setBrewhops1ibu('6.0')
                ->setBrewhops1time('90')
                ->setBrewhops1type('Bittering')
                ->setBrewhops1use('Dry Hop')
                ->setBrewhops1weight('1.35');
        
        $hops = $brewing->getHops();
        $this->assertEquals(2, count($hops));
        $this->assertEquals('Magnum', $hops[0]['Name']);
        $this->assertEquals('Pellets', $hops[1]['Form']);
        $this->assertEquals('6.0', $hops[0]['AlphaAcid']);
        $this->assertEquals(60, $hops[1]['Time']);
        $this->assertEquals('Bittering', $hops[0]['Purpose']);
        $this->assertEquals('Boil', $hops[1]['Use']);
        $this->assertEquals('1.35', $hops[0]['Weight']);
        
        $total = $brewing->getTotalHops();
        $this->assertEquals(2, $total['Weight']);
        $this->assertEquals(12.65, $total['AAU']);
    }
}