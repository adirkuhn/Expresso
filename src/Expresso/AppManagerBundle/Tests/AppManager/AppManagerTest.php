<?php

namespace Expresso\AppManagerBundle\Tests\AppManager;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AppManager extends WebTestCase
{
    public function testIndex()
    {
        //print_r('ronaldo');
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        print_r($crawler);

        $this->assertTrue(1 == 1 );
    }
}