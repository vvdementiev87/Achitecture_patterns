<?php

use Devavi\Architecture\HW81\WindowsExplorer;

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
// Задание 8.1
$explorer = new WindowsExplorer();
try {
    $explorer->printDirContent('src');
    echo "_______________________" . PHP_EOL;
} catch (\Throwable $th) {
    echo $th;
}
try {
    $explorer->printDirContent('HW81');
    echo "_______________________" . PHP_EOL;
} catch (\Throwable $th) {
    echo $th;
}
try {
    $explorer->printDirContent('..');
    echo "_______________________" . PHP_EOL;
} catch (\Throwable $th) {
    echo $th;
}
try {
    $explorer->printDirContent('HW81');
    echo "_______________________" . PHP_EOL;
} catch (\Throwable $th) {
    echo $th;
}

// Задание 8.1 - конец
// Задание 8.2
/* 2. Определить сложность следующих алгоритмов:
    ● поиск элемента массива с известным индексом,
        O(1)

    ● дублирование массива через foreach,
        O(n)

    ● рекурсивная функция нахождения факториала числа.
        O(n)
    
    */
// Задание 8.2 - конец
// Задание 8.3
/* 3. Определить сложность следующих алгоритмов. Сколько произойдет итераций?
    1)
    $n = 100;
    $array[]= [];
    for ($i = 0; $i < $n; $i++) {
    for ($j = 1; $j < $n; $j *= 2) {
    $array[$i][$j]= true;
    } }

    При $n=100 будет 700 итераций или O(7n)

    2)
    $n = 100;
    $array[] = [];
    for ($i = 0; $i < $n; $i += 2) {
    for ($j = $i; $j < $n; $j++) {
    $array[$i][$j]= true;
    } }

    При $n=100 будет 2550 итераций или O(25n)
    
    */
// Задание 8.3 - конец