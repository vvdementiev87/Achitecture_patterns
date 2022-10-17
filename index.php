<?php

use Devavi\Architecture\Libs\CircleAreaLib;
use Devavi\Architecture\Libs\SquareAreaLib;
use Devavi\Architecture\Services\AreaCalculationService;

function load($className)
{
    var_dump($className);
    $file = $className . ".php";
    $nameSpace = "Devavi\Architecture";
    $file = str_replace($nameSpace, "src", $file);
    $file = str_replace("\\", "/", $file);
    $file = str_replace("_", "/", $file);
    if (file_exists($file)) {
        var_dump($file);
        include $file;
    }
};

$service = new AreaCalculationService(new CircleAreaLib(), new SquareAreaLib());

echo $service->circleArea(100) . PHP_EOL;
echo $service->squareArea(5) . PHP_EOL;
