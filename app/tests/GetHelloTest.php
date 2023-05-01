<?php

namespace JumasCola\K8sPhp\tests;

use JumasCola\K8sPhp\Classes\GetHelloService;
use PHPUnit\Framework\TestCase;

class GetHelloTest extends TestCase
{
    public function test_get_hello()
    {
        $getHelloService = new GetHelloService();

        $this->assertEquals(
            'Hello K8S!',
            $getHelloService->getHelloString()
        );
    }
}
