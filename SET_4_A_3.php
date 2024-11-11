<?php
function Maximum($num1, $num2, $num3) {
    // Use the max() function to find the maximum value
    return max($num1, $num2, $num3);
}

$a = 10;
$b = 25;
$c = 15;

$max_value = Maximum($a, $b, $c);
echo "The maximum of $a, $b, and $c is: $max_value";
?>
