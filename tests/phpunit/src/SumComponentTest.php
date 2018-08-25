<?php

namespace MyComponent\Tests\src;

use MyComponent\SumComponent;
use PHPUnit\Framework\TestCase;

class SumComponentTest extends TestCase
{
    /** @var SumComponent */
    private $sumComponent;

    public function setUp(): void
    {
        $this->sumComponent = new SumComponent();
    }

    public function testSum(): void
    {
        $this->assertEquals(5, $this->sumComponent->sum(2, 3));
    }
}
