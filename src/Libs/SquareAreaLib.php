<?php

namespace Devavi\Architecture\Libs;

class SquareAreaLib
{
    public function getSquareArea(int $diagonal): int
    {
        return ($diagonal ** 2) / 2;
    }
}
