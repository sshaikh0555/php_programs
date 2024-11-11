<?php
$assocArray1 = [
    "a" => 7,
    "b" => 12,
    "c" => 3
];
$assocArray2 = [
    "b" => 6,
    "d" => 9,
    "c" => 2
];
function sortValuesChangeKeys($array, $order = SORT_ASC) {
    if ($order == SORT_DESC) {
        arsort($array);
    } else {
        asort($array);
    }
    return $array;
}
function sortValuesWithoutChangingKeys($array, $order = SORT_ASC) {
    $values = array_values($array);
    if ($order == SORT_DESC) {
        rsort($values);
    } else {
        sort($values);
    }
    return $values;
}
function arrayIntersection($array1, $array2) {
    return array_intersect_assoc($array1, $array2);
}
function arrayUnion($array1, $array2) {
    return array_merge($array1, $array2);
}
function displayMenu() {
    echo "Menu:\n";
    echo "1. Sort the array by values (changing keys) in ascending order.\n";
    echo "2. Sort the array by values (changing keys) in descending order.\n";
    echo "3. Sort the array by values without changing the keys.\n";
    echo "4. Find the intersection of two arrays.\n";
    echo "5. Find the union of two arrays.\n";
    echo "Enter your choice: ";
}
displayMenu();
$choice = 3;
switch ($choice) {
    case 1:
        echo "Array sorted by values (ascending) with changing keys:\n";
        print_r(sortValuesChangeKeys($assocArray1, SORT_ASC));
        break;
		
    case 2:
        echo "Array sorted by values (descending) with changing keys:\n";
        print_r(sortValuesChangeKeys($assocArray1, SORT_DESC));
        break;

    case 3:
        echo "Array sorted by values without changing the keys:\n";
        print_r(sortValuesWithoutChangingKeys($assocArray1, SORT_ASC));
        break;

    case 4:
        echo "Intersection of two arrays:\n";
        print_r(arrayIntersection($assocArray1, $assocArray2));
        break;

    case 5:
        echo "Union of two arrays:\n";
        print_r(arrayUnion($assocArray1, $assocArray2));
        break;

    default:
        echo "Choice not found.";
}
?>