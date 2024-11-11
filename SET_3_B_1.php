<?php
$string2 = "Hello World";
$string3 = "hello world";

if (strcmp($string2, $string3) == 0) {
    echo " '$string2' & '$string3' are same" ;
}
else {
    echo " '$string2' & '$string3' are different";
}
$string1 = "this is a test";
$string2 = "Hello World";
$string3 = "hello world";

echo "<br>";

echo strtoupper($string1);
echo "<br>";
echo strtoupper($string2);
echo "<br>";
echo strtoupper($string3);

$string = "PHP Is GOOD PROGRAMMING LANGUAGE";
echo "<br>";
$lower = strtolower($string);
echo "Lowercase: $lower";
echo "<br>";
$upper = strtoupper($string);
echo "Uppercase: $upper"

?>