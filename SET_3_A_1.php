<?php
$array1 = [1, 2, 3, 4];
$array2 = [3, 4, 5, 6];

$unionArray = array_merge($array1, $array2);
$unionArray = array_unique($unionArray);

echo "Union of two arrays: ";
print_r($unionArray);

shuffle($unionArray);

echo "array element in random order - ";

foreach($unionArray as $element){
	echo $element . " ";
}
?>