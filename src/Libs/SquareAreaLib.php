<?php

namespace Devavi\Architecture\Libs;

class SquareAreaLib
{
    public function getSquareArea(float $diagonal): float
    {
        return ($diagonal ** 2) / 2;
    }
}
