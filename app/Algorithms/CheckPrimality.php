<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 13.01.2017
 * Time: 13:42
 */

// O(N^(1/2)) algorithm
function isPrime(int $number)
{
    // 2 is prime
    if($number == 2)
        return true;
    // 1 is not prime
    // Even numbers > 2 are not prime
    elseif($number%2 == 0 || $number == 1)
        return false;

    // Checking up to sqrt of the number is enough
    for($i=3; $i<=sqrt($number); $i++) {
        if($number%$i == 0)
            return false;
    }

    return true;
}

$numbers = [3, 8, 14, 15, 17, 23, 89];

foreach($numbers as $n) {
    if(isPrime($n)) echo $n." is prime.<br />";
    else echo $n." is not prime.<br />";
}