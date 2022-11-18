<?php

/**
 * 1. Реализовать построение и обход дерева для математического выражения.
 * 2. Реализовать решение уравнений и примеров из задания 1.
 * 3. Рассмотреть подход прямой и обратной польских нотаций. Чем они лучше деревьев в первой
 *    задаче? Нужны ли деревья в их реализации?
 */

use Devavi\Architecture\Calculation\Main;

spl_autoload_register('load');

function load($className)
{
    $file = $className . ".php";
    $nameSpace = "Devavi\Architecture";
    $file = str_replace($nameSpace, "src", $file);
    $file = str_replace("\\", "/", $file);
    $file = str_replace("_", "/", $file);
    if (file_exists($file)) {
        include $file;
    }
};

// server start command: php -S localhost:8080  HW10-1.php

// задаем исходное математическое выражение
$str = "(x+14)^2+3*y-z";
$x = 10;
$y = 6;
$z = 7;

$parse = new Main();

// строительство дерева классов
$parse->builder($str);

// вформирования древовидной структуры
echo '<pre>';
echo print_r($parse->arNode);
echo '</pre>';

echo $str . " = " . $parse->calc($x, $y, $z);

echo " при: x=" . $x . "; y=" . $y . "; z=" . $z;
