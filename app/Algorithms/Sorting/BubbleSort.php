<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 28.12.2016
 * Time: 16:12
 * Sort an array using bubble sort algorithm order by asc
 * Find swap count and proper list
 */

$numbers = [9, 5, 8, 3, 1];
/**
 * @param array $numbers
 * @return array|string
 */
function bubbleSort($numbers = []) {
    // Count numbers
    $numbersCount = count($numbers);
    // Count swapping numbers

    // If there is only one element return it
    if ($numbersCount <= 1) return $numbers;

    $totalSwapCount = 0;
    do {
        // reset swap count
        $swapCount = 0;
        for ($i=0; $i<$numbersCount-1; $i++) {
            if ($numbers[$i] > $numbers[$i+1]) {
                $temp = $numbers[$i+1];
                $numbers[$i+1] = $numbers[$i];
                $numbers[$i] = $temp;
                $swapCount++;
                $totalSwapCount++;
            }
        }
    } while ($swapCount>0);

    $text = implode(", ", $numbers)."<br />";
    $text .= "Array is sorted in ".$totalSwapCount." swaps.";
    return $text;
}
echo bubbleSort($numbers);