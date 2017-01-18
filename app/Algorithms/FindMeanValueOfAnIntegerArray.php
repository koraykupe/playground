<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 13.01.2017
 * Time: 12:57
 */


// Naive solution
function meanFinder1(array $numbers)
{
    $sum = 0;
    if($numbers == null || count($numbers) < 1) {
        return "Invalid input. Please use an array that includes integer values";
    }

    // Time complexity: N
    for ($i=0; $i<count($numbers); $i++) {
        $sum += $numbers[$i];
    }

    // Time complexity 1
    $mean = $sum / count($numbers);
    return $mean;
}

function findAverage(array $numbers)
{
    if(count($numbers)<=500) // Brute-force average 500 numbers or less.
    {
        $avg['average'] = 0;
        $avg['count'] = count($numbers);

        foreach($numbers as $number)
        {
            $avg['average'] += $number;
        }
        $avg['average'] /= $avg['count'];
        return $avg;
    }

    // For more than 500 numbers, break the list into two sub-lists.
    $subAvgA = findAverage(divideArray(0, $numbers['count']/2));
    $subAvgB = findAverage(divideArray($numbers['count']/2, $numbers['count']-($numbers['count']/2)));

    $final['average'] = ($subAvgA['average'] * $subAvgA['count']/$numbers['count']) + ($subAvgB['average'] * $subAvgB['count']/$numbers['count']);
    $final['count'] = $numbers['count'];
    echo "Average of ".$final['count']." numbers is ".$final['average'];
    return $final;
}

$numbers = [5, 3, 8, 6, 5, 4, 3, 10, 56, 841, 106];

echo meanFinder($numbers);