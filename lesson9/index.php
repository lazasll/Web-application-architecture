<?php

include 'randArray.php';

include 'Bubble.php';
include 'CombSort.php';
include 'Heapsort.php';
include 'QuickSort.php';
include 'DualSelectSort.php';

include 'Delete.php';

include 'LinearSearch.php';
include 'BinarySearch.php';
include 'InterpolationSearch.php';

$arr = _randArray(500000, 1, 500000);

// задание 1
$start = microtime(true);
bubbleSort($arr);
echo "Сортировка пузырьком: ".( microtime(true) - $start).PHP_EOL;

$start = microtime(true);
combSort($arr);
echo "Сортировка расческой: ".( microtime(true) - $start).PHP_EOL;

$start = microtime(true);
quickSortLesson($arr);
echo "Сортировка быстрая наша: ".( microtime(true) - $start).PHP_EOL;

$start = microtime(true);
dualSelectSort($arr);
echo "Сортировка выбором: ".( microtime(true) - $start).PHP_EOL;

// задание 2
$arr = dell($arr, 556);

// задание 3
$arr = getSortRandArray(40000, 1, 50000);

const NUM = 5555;

echo "Линейный поиск".PHP_EOL;
echo linearSearch($arr, NUM).PHP_EOL;

echo "Бинарный поиск".PHP_EOL;
echo binarySearch($arr, NUM).PHP_EOL;

echo "Интерполяционный".PHP_EOL;
echo interpolationSearch($arr, NUM);