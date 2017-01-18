<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 18.01.2017
 * Time: 08:19
 */

$list = [5, 6, 9, 2, 1, 164, 548, 647];

function select(&$list, $left, $right, $n) {
        if($left == $right)
            return $list[$left];

        $pivotIndex = pivot($list, $left, $right);
        $pivotIndex = partition($list, $left, $right, $pivotIndex);

        if($n<$pivotIndex)
            return partition($list, $pivotIndex-1, $right, $n);
        elseif($n>$pivotIndex)
            return partition($list, $left, $pivotIndex-1, $n);
        else
            return $list[$n];
}

function partition(&$list, $left, $right, $pivotIndex) {
    $pivot = $list[$pivotIndex];
    $partitionIndex = $left;

    $list = swap($list, $pivotIndex, $right);

    for ($i=$left; $i<$right; $i++) {
        if($list[$i]<$pivot) {
            $list = swap($list, $i, $partitionIndex);
            $partitionIndex++;
        }
    }
    $list = swap($list, $partitionIndex, $right);
    return $partitionIndex;
}

function swap(array $list, $a, $b) {
    $temp = $list[$a];
    $list[$a] = $list[$b];
    $list[$b] = $temp;
    return $list;
}












/*
function findMedian($numbers, $k) {
    if(count($numbers) == 1)
        return $numbers[0];
    else {
        $left = "İlk değerden küçük olanlar";
        $right = "İlk değerden büyük olanlar";
    }

    if(count($left) == $k-1) {
        // the pivot is median ($numbers[0])
    }

    if(count($left) > $k-1) {
        // median will be in $left
        // need to recurse it
        findMedian($left, $k);
    }

    if($right < $k-1) {
        // median will be in $right
        // need to recurse it
        findMedian($right, $k-count($left)-1);
    }
}

*/
// T(n) <= (n-1) + T(n-1) "worst case"
// T(n) <= (n-1) + T(max(count($left), count($right)))
// T(n) <= (n-1) + (n-2) + T(n-2)
// T(n) <= (n-1) + (n-2) + (n-2) + T(n-3)
// T(n) <= (n-1) + (n-2) + (n-2) + ... + 3 + 2 +1
// O(n^2)