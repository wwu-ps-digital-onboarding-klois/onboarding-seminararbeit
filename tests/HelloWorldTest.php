<?php

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    function testGenerateHelloWorld()
    {
        $helloWorldGenerator = new HelloWorldGenerator();
        $this->assertSame($helloWorldGenerator->generateHelloWorld(), "Hello World!");
    }
}
