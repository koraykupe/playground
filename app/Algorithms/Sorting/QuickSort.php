<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 16.01.2017
 * Time: 13:56
 */
$numbers = [6, 3, 1, 2, 5, 8, 9, 7, 15, 13];
/*
function quickSort(array $numbers, int $left, int $right) {
    $count = count($numbers);
    $pivot = round($count/2);
    $index = partition($numbers, $left, $right, $pivot);
    quickSort($numbers, $left, $index-1);
    quickSort($numbers, $index, $right);

    return $numbers;
}

function partition(array $numbers, $left, $right, $pivot) {
    while($left <= $right) {
        while($numbers[$left] < $numbers[$pivot]) {
            $left++;
        }

        while ($numbers[$right] > $numbers[$pivot) {
            $right--;
        }

        if($left <= $right) {
            $numbers = swap($numbers, $left, $right);
            $left++;
            $right--;
        }
    }
    return $left;
}

function swap(array $numbers, int $left, int $right) {
    if(isset($numbers[$left]) && isset($numbers[$right])) {
        $temp = $numbers[$left];
        $numbers[$left] = $numbers[$right];
        $numbers[$right] = $temp;
    }
    return $numbers;
}
echo implode(", ", quickSort($numbers, 0, count($numbers)-1));
*/