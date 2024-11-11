<?php
$string1 = "this is a practice test. This is just a text.";
$string2 = "is";

$firstPos = strpos($string1, $string2);
if ($firstPos != false) {
    echo "First occurrence of $string2 is at position $firstPos.";
	echo "<br>";
}
 else {
    echo "$string2 not found in string1.";
}

$lastPos = strrpos($string1, $string2);
if ($lastPos !== false) {
    echo "Last occurrence of $string2 is at position $lastPos.";
}
 else {
    echo "'$string2' not found in string1.";
}
?>