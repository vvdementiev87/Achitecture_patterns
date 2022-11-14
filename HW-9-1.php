<?php

/* 1. Создать массив на миллион элементов и отсортировать его различными способами. Сравнить
   скорости. */

include 'sort/QuickSort.php';
include 'sort/08QuickSort.php';
include 'sort/06Bubble.php';
include 'sort/randArray.php';
include 'sort/Heapsort.php';
include 'sort/insertSort.php';
include 'sort/PigeonholeSort.php';
include 'sort/MergeSort.php';
include 'sort/InsertSortSPL.php';
include 'sort/HeapSplSort.php';
include 'sort/DualSelectSort.php';
include 'sort/CombSort.php';

function getArr(): array
{
    return _randArray(50000);
}

$arr = getArr();
$lastIndex = count($arr) - 1;

//print_r($arr);

$start = microtime(true);
bubbleSort($arr);
echo "Сортировка пузырьком: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
insertion_sort($arr);
echo "Сортировка вставками: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
combSort($arr);
echo "Сортировка расческой: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
insertSort($arr);
echo "Сортировка вставками сорт. массива: " . (microtime(true) - $start) . PHP_EOL;


$arr = getArr();
$start = microtime(true);
mergeSort($arr);
echo "Сортировка слиянием: " . (microtime(true) - $start) . PHP_EOL;


$arr = getArr();
$start = microtime(true);
heapSort($arr);
echo "Сортировка пирамидальная: " . (microtime(true) - $start) . PHP_EOL;


$arr = getArr();
$start = microtime(true);
treeSort($arr);
echo "Сортировка пирамидальная SPL: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
quickSortLesson($arr);
echo "Сортировка быстрая наша: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
quickSort($arr, 0, $lastIndex);
echo "Сортировка быстрая чужая: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
sort($arr);
echo "Сортировка из PHP: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
dualSelectSort($arr);
echo "Сортировка выбором: " . (microtime(true) - $start) . PHP_EOL;

$arr = getArr();
$start = microtime(true);
pigeonholeSort($arr);
echo "Сортировка голубиная: " . (microtime(true) - $start) . PHP_EOL;

/**
 * Сортировка пузырьком: 184.47529196739
 * Сортировка вставками: 459.93264198303 наимедленнейшая
 * Сортировка расческой: 2.4233660697937
 * Сортировка вставками сорт. массива: 98.541015863419
 * Сортировка слиянием: 0.24436497688293
 * Сортировка пирамидальная: 0.85619688034058
 * Сортировка пирамидальная SPL: 0.10906887054443
 * Сортировка быстрая наша: 0.20394992828369
 * Сортировка быстрая чужая: 0.16975021362305
 * Сортировка из PHP: 0.01160717010498 наибыстрейшая
 * Сортировка выбором: 97.897223949432
 * Сортировка голубиная: 0.063886880874634
 */
