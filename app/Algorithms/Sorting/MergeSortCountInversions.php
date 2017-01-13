<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 13.01.2017
 * Time: 15:22
 * https://www.hackerrank.com/challenges/ctci-merge-sort
 */

function countSwaps(&$numbers) {
    $length = count($numbers);
    // If there is only one element, return zero
    if ($length<=1)
        return 0;
    
    $middle = round($length/2);
    // Divide the array to two pieces
    $numbersLeft = array_slice($numbers, 0, $middle);
    $numbersRight = array_slice($numbers, $middle);
    $count = countSwaps($numbersLeft) + countSwaps($numbersRight);

    $numbers = [];
    $i = 0;
    $j = 0;
    // i is current position of left
    while ($i<$middle || $j<$length-$middle) {
        if ($i==$middle) {
            $numbers = array_merge($numbers, array_slice($numbersRight, $j));
            break;
        }
        if ($j==($length-$middle)) {
            $numbers = array_merge($numbers, array_slice($numbersLeft, $i));
            break;
        }
        if ($numbersLeft[$i]<=$numbersRight[$j]) {
            $numbers[] = $numbersLeft[$i];
            $i++;
        } else {
            $numbers[] = $numbersRight[$j];
            $j++;
            $count += $middle - $i;
        }
    }
    return $count;
}
$numbers = [2, 1, 3, 1, 2];
echo countSwaps($numbers);