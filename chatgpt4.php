<?php
$array = array(
    "a" => "apple",
    "b" => "banana",
    "c" => "cherry",
    "d" => "date"
);

function displayArrayWithKeys($array) {
    echo "Array elements with keys:\n";
    foreach ($array as $key => $value) {
        echo "$key => $value\n";
    }
    echo "\n";
}

function displayArraySize($array) {
    echo "Size of the array: " . count($array) . "\n\n";
}

function deleteElementAtIndex(&$array, $key) {
    if (array_key_exists($key, $array)) {
        unset($array[$key]);
        echo "Element with key '$key' deleted.\n\n";
    } else {
        echo "Key '$key' not found in the array.\n\n";
    }
}

function reverseKeyValuePairs($array) {
    echo "Reversed key-value pairs:\n";
    $reversed = array_flip($array);
    foreach ($reversed as $key => $value) {
        echo "$key => $value\n";
    }
    echo "\n";
}

function traverseRandomOrder($array) {
    echo "Array elements in random order:\n";
    $keys = array_keys($array);
    shuffle($keys);
    foreach ($keys as $key) {
        echo "$key => " . $array[$key] . "\n";
    }
    echo "\n";
}

displayArrayWithKeys($array);

displayArraySize($array);

deleteElementAtIndex($array, 'b');

displayArrayWithKeys($array);

reverseKeyValuePairs($array);

traverseRandomOrder($array);
?>