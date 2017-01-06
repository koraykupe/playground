<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 28.12.2016
 * Time: 15:21
 * Binary search solution for finding
 * longest increasing subsequence number
 */

// $nums = [6, 1, 2, 2, 9, 6, 7];
$nums = [10, 22, 9, 33, 21, 50, 41, 60];
function lengthOfLIS($nums) {
    $list = [];
	foreach ($nums as $num) {
        // If it is first number or bigger than last number of LIS array add it to the array
        if(count($list) == 0 || $num > end($list)) {
            array_push($list, $num);
        } else {
            $i=0;
            $j=count($list)-1;

            // Binary search
            while($i<$j) {
                // Find middle 'pivot' number of the LIS array
                $mid = ($i+$j)/2;
                if($list[$mid] < $num) {
                    $i=$mid+1;
                }
            }
            $list[$j] = $num;
        }
    }
	return count($list);
}

// Naive Solution
function lengthOfLIS2($nums) {
    $list = [];
    foreach ($nums as $num) {
        if(count($list) == 0) {
            $list[0] = $num;
        } else {
            if ($num > end($list)) {
                array_push($list, $num);
            } else {
                $list[count($list)-1] = $num;
            }
        }
    }
    return count($list);
}

// echo lengthOfLIS($nums);
echo "<br />";
echo lengthOfLIS2($nums);