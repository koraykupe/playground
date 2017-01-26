<?php
/*
 * Check expressions one by one and if pharanteses are balanced print yes, otherwise no
 *
 */

$expressions = [
    "{[()]}",
    "{[(])}",
    "{{[[(())]]}}"
];

$brackets = [
    "[" => "]",
    "(" => ")",
    "{" => "}"
];

foreach($expressions as $expression){
    if (isBalanced($expression, $brackets))
        echo "YES<br />";
    else
        echo "NO<br />";

}

function isBalanced($str, $brackets) {

    $balance = true;
    $chars = str_split($str);
    $stack = [];

    foreach($chars as $char) {
        // If char is a starting bracket add it to stack
        if(array_key_exists($char, $brackets)) {
            array_push($stack, $char);
        } elseif(in_array($char, $brackets)) {
            // If char is a closing bracket pop the element off the end of the stack
            $poppedChar = array_pop($stack);
            // If the popped element's starting bracket is not equal to current char, it is not balanced
            if($brackets[$poppedChar] != $char) {
                $balance = false;
                break;
            }
        }
    }

    // If stack count is zero it is balanced
    if (count($stack) > 0) return false;

    return $balance;
}