<?php

/* 3. Подсчитать практически количество шагов при поиске описанными в методичке алгоритмами. */

include 'search/randArray.php';
include 'search/LinearSearch.php';
include 'search/BinarySearch.php';
include 'search/InterpolationSearch.php';

const NUM = 157;

$arr = getSortRandArray();

//print_r($arr);

echo "Линейный поиск" . PHP_EOL;
echo linearSearch($arr, NUM) . PHP_EOL;

echo "Бинарный поиск" . PHP_EOL;
echo binarySearch($arr, NUM) . PHP_EOL;

echo "Интерполяционный" . PHP_EOL;
echo interpolationSearch($arr, NUM);
