<?php
$multiarray = [
"fruits" => ["apple","banana","mango"],
"vehicle" => ["bike","car","bus"]
];

echo "multidimensional array";
print_r($multiarray);

$searchitem = "bike";
$found = false;

foreach($multiarray as $category => $items){
	if(in_array($searchitem,$items)){
		echo "<br>";
		echo "found '$searchitem' in category '$category'";
		$found = true;
		break;
	}
}
if(!$found){
	echo "the $searchitem is not found";
}
?>