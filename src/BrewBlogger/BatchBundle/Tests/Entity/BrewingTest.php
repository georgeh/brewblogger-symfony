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
}