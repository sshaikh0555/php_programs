<?php

$num = 6;
$sum = 0;
for($i=1; $i<=$num/2;$i++) {
	if(($num%$i)==0){
		$sum += $i;
		echo $sum;
	}
}
if($sum == $num){
	echo "the number is perfect";
}
else{
	echo "the number is not perfect";
}
?>