<?php
$string1 = "PHP is good language!";
$string2 = "PHP";
$string3 = "JavaScript";

$replaceString = str_replace($string2, $string3, $string1);

echo "Original String: $string1";
echo "Modified String (Replaced): $replaceString";

$reversedString = strrev($replaceString);

echo "Reversed String: $reversedString";
?>