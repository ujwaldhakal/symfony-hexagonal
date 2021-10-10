<?php

declare(strict_types=1);


namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StartSubscriptionTest extends WebTestCase
{



    public function testStartSubscriptionWithValidDataSets()
    {

        // This calls KernelTestCase::bootKernel(), and creates a
        // "client" that is acting as the browser
        $client = static::createClient();


        $crawler = $client->request('POST', '/subscription',['plan_id' => 1, 'addon_id' => 1]);

        $this->assertSame(204, $client->getResponse()->getStatusCode());


    }
}