<?php
/**
 * Created by PhpStorm.
 * User: koraykupe
 * Date: 10.01.2017
 * Time: 15:13
 */

$array1 = [3, 5, 7, 9, 12];
$array2 = [2, 3, 7, 15, 16];

// Count all the values of the first array
$array1 = array_flip($array1);
$commonValues = [];


foreach ($array2 as $r)
{
    if (isset($array1[$r]))
        $commonValues[] = $r;
}


print_r($commonValues);