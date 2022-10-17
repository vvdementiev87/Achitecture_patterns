<?php

namespace Devavi\Architecture\Services;

use Devavi\Architecture\Figures\ICircle;
use Devavi\Architecture\Figures\ISquare;
use Devavi\Architecture\Libs\CircleAreaLib;
use Devavi\Architecture\Libs\SquareAreaLib;

class AreaCalculationService implements ICircle, ISquare
{
    private CircleAreaLib $circleAreaLib;
    private SquareAreaLib $squareAreaLib;

    public function __construct(CircleAreaLib $circleAreaLib, SquareAreaLib $squareAreaLib)
    {
        $this->circleAreaLib = $circleAreaLib;
        $this->squareAreaLib = $squareAreaLib;
    }

    public function circleArea(float $circumference): float
    {
        $diagonal = $circumference / M_PI;
        return $this->circleAreaLib->getCircleArea($diagonal);
    }

    public function squareArea(float $sideSquare): float
    {
        $diagonal = sqrt(2) * $sideSquare;
        return $this->squareAreaLib->getSquareArea($diagonal);
    }
}
