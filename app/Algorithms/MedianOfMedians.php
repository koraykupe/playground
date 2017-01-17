<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 17.01.2017
 * Time: 16:01
 * Finds median of an unsorted array
 */

$numbers = [3, 5, 7, 8, 2, 43, 543, 5345, 5, 6];
$n = count($numbers);

// Median Algorithm
for($i=0; $i<$n; $i++) {
    for($j=$i+1; $j<$n; $j++) {
        if($numbers[$i] > $numbers[$j]) {
            $temp = $numbers[$i];
            $numbers[$i] = $numbers[$j];
            $numbers[$j] = $temp;
        }
    }
}

if ($n%2 != 0) {
    $median = floor(($n+1)/2);
} else {
    $p = intval(floor($n/2));
    $q = intval(floor(($n/2)+1));
    $median = floor(($numbers[$p]+$numbers[$q])/2);
}

echo $median;