<?php

use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testAddition()
    {
        $result = 1 + 1;
        $this->assertSame($result, 2);
    }
}
