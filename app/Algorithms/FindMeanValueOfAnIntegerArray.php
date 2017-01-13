<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 13.01.2017
 * Time: 12:57
 */

function meanFinder(array $numbers)
{
    $sum = 0;
    if($numbers == null || count($numbers) < 1) {
        return "Invalid input. Please use an array that includes integer values";
    }

    for ($i=0; $i<count($numbers); $i++) {
        $sum += $numbers[$i];
    }

    $mean = $sum / count($numbers);
    return $mean;

}

$numbers = [5, 3, 8, 6, 5, 4, 3, 10, 56, 841, 106];

echo meanFinder($numbers);