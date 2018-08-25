<?php

declare(strict_types=1);

namespace MyComponent;

class SumComponent
{
    public function sum(int $value1, int $value2): int
    {
        return $value1 + $value2;
    }
}
