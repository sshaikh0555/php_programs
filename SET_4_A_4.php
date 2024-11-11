<?php
function swapByValue($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "Inside swapByValue function: a = $a, b = $b\n";
}

function swapByReference(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "Inside swapByReference function: a = $a, b = $b\n";
}

$a = 10;
$b = 20;

echo "Before swapByValue: a = $a, b = $b\n";
swapByValue($a, $b);
echo "After swapByValue: a = $a, b = $b\n";

echo "\nBefore swapByReference: a = $a, b = $b\n";
swapByReference($a, $b);
echo "After swapByReference: a = $a, b = $b\n";
?>
