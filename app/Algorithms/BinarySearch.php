<?php

$list = [3, 5, 8, 10, 14, 22, 28, 33];
$number = 14;

function binarySearch($list, $number)
{
    $count = count($list);
    $left = 0;
    $right = $count-1;

    while ($left<=$right) {
        $middle = floor(($left+$right)/2);
        if ($number == $list[$middle])
            return $middle;
        elseif ($number>$list[$middle])
            $left = $middle+1;
        else
            $right = $middle-1;
    }

    return -1;
}

echo binarySearch($list, $number);