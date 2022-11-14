<?php
/* 
4. Выписав первые шесть простых чисел, получим 2, 3, 5, 7, 11 и 13. Очевидно, что 6-е простое
   число — 13. Какое число является 10001-м простым числом?

Использовано    
Решето Эратосфена
https://ru.wikipedia.org/wiki/%D0%A0%D0%B5%D1%88%D0%B5%D1%82%D0%BE_%D0%AD%D1%80%D0%B0%D1%82%D0%BE%D1%81%D1%84%D0%B5%D0%BD%D0%B0

из статьи
https://habr.com/ru/sandbox/142708/

как более производительное

проверка
https://ru.numberempire.com/104743
*/

ini_set('max_execution_time', 0);

$max = 105000;
$sqrt_max = (int)sqrt($max);

$numbers = str_repeat('1', $max);

$multiplier = 2;

$time = time();

while ($multiplier <= $sqrt_max) {
    for ($i = $multiplier; $i * $multiplier < $max; $i++)
        $numbers[$i * $multiplier] = '0';
    while ($numbers[++$multiplier] == '0');
}

var_dump($numbers);

$primes = 0;
$number = 0;
for ($i = 2; $i < strlen($numbers); $i++) {
    if ($numbers[$i] == '1') {

        $primes++;
    };
    if ($primes == (10001) && ($number == 0)) {
        $number = $i;
        echo "Число простое на 10001 позиции: " . $number . PHP_EOL;
    }
}

echo 'primes/all: ' . number_format($primes);
echo ' / ' . number_format($max);
