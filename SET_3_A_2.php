<?php
$associativeArray = array(
			"a" => "ind<br>",
			"b" => "eng<br>",
			"c" => "sri lanka");

foreach($associativeArray as $key=> $value){
	echo "$key => $value";
}

function displayArraySize($associativeArray) {
    echo "Size of the array: " . count($associativeArray) . "\n\n";
}
?>