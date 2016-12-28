<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 28.12.2016
 * Time: 15:21
 * Binary search solution for finding
 * longest increasing subsequence number
 */

$nums = [9, 1, 3, 7, 5, 6, 20];

function lengthOfLIS($nums) {
    $list = [];
	foreach ($nums as $num) {
        if(count($list) == 0 || $num > end($list)) {
            array_push($list, $num);
        } else {
            $i=0;
            $j=count($list)-1;

            while($i<$j) {
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

echo lengthOfLIS($nums);