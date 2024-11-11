<?php

function isleapyear($year){
if(($year % 4 == 0 && $year	% 100 !=0)
	||($year % 400 == 0)) {
		return true;
	} else {
	return false;
	}
}
$year = 2024;
if (isleapyear($year)) {
	echo "leap year";
} else {
	echo "not a leap year";
}
?>