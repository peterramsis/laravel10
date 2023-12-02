<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $calc = $this->calc(6, 6);
        $this->assertEquals(12, $calc , "not equal");
    }

    public function calc($one , $two)
    {
        return $one + $two;
    }
}
