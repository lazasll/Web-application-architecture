<?php

function binarySearch ($myArray, $num) {

    //определяем границы массива
    $left = 0;
    $right = count($myArray) - 1;

    $countSteps = 0;

    while ($left <= $right) {

        //находим центральный элемент с округлением индекса в меньшую сторону
        $middle = floor(($right + $left)/2);
        $countSteps++;
        //если центральный элемент и есть искомый
        if ($myArray[$middle] == $num) {
            $countSteps++;
            return $countSteps;
        }

        elseif ($myArray[$middle] > $num) {
            //сдвигаем границы массива до диапазона от left до middle-1
            $right = $middle - 1;
        }
        elseif ($myArray[$middle] < $num) {
            $left = $middle + 1;
        }
        $countSteps++;
    }
    return $countSteps;
}