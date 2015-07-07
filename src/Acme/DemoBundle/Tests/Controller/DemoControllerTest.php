<?php
/**
 * Created by PhpStorm.
 * User: bswiatek
 * Date: 25.06.15
 * Time: 11:27
 */
namespace Acme\DemoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DemoControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Fabien');

        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Hello Fabien")')->count()
        );
    }
}