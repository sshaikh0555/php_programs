<?php
$rev = 0;
$num = 289;
while($num>0){
	$rem = $num % 10;
	echo $rem;
	$rev = $rev*10 + $rem;
	$num = $num/10;
}

//while($rev>0){
//	$rem = $rev%10;
//	echo $rem;
	
//	$rev = $rev/10;
//}
?>