<?php

namespace BrewBlogger\CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BatchControllerTest extends WebTestCase
{
    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/batch/1');

        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Sample Log #3")')->count()
        );
    }
}
