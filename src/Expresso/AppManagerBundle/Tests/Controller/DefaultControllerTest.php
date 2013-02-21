<?php

namespace Expresso\AppManagerBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{

    private $client;

    public function setup() {
        print_r("setupando");
        $this->client = static::createClient();

        $result = $this->client->request('GET', '/login');

        $form = $result->selectButton('login')->form();

        $result = $this->client->submit($form, array(
            '_username' => 'user6', // case sensitive for the input e.g. name="_username"
            '_password' => 'prognus' // case sensitive for the input e.g. name="_password"
        ));

        //$result = $this->client->followRedirect();

        var_dump($result->text());

        // $result = $this->client->request('POST', '/login', array(
        //     '_username' => 'user6',
        //     '_password' => 'prognus'
        // ));
        // var_dump($result->text());

        // var_dump($this->client->getResponse()->getStatusCode());
        //print_r($result);
    }

    public function testIndex()
    {
        

        $crawler = $this->client->request('GET', '/expresso/appmanager');

        //página existe codigo 2xx
        //$this->assertTrue($this->client->getResponse()->isSuccessful());
        print_r('venha');
        var_dump($this->client->getResponse()->isSuccessful());
        var_dump($this->client->getResponse()->getStatusCode());
        //pagina contem texto esperado
        print_r($crawler->filter('html:contains("Adir")'));
        //print_r($crawler->text());
        $this->assertTrue($crawler->filter('html:contains("Adir Kuhn")')->count() > 0);
    }
}
