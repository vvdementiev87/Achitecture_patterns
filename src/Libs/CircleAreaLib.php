<?php

namespace Devavi\Architecture\Libs;

class CircleAreaLib
{
    public function getCircleArea(int $diagonal): int
    {
        return (M_PI * $diagonal ** 2) / 4;
    }
}
