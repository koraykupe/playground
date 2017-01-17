<?php
/**
 * Created by PhpStorm.
 * User: koray.kup
 * Date: 16.01.2017
 * Time: 16:03
 * Draw staircase
 */

$n = 8; // Height of the staircase
$line = "";

for($i=1; $i<=$n; $i++) {
    for($j=1; $j<=$n; $j++) {
        if($j <= $n-$i)
            $line .= " ";
        else
            $line .= "#";
    }
    $line .= ($i!=$n) ? "<br />" : "";
}
echo $line;
?>
