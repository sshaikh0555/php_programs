<?php
$marks = 69;
if($marks<33){
	echo "FAIL";
}
else if ($marks>=34 && $marks<50){
	echo"D GRADE";
}
else if ($marks>=50 && $marks<65){
	echo "C GRADE";
}
else if ($marks>=65 && $marks<80){
	echo "B GRADE";
}
else if ($marks>=80 && $marks<90){
		echo "A GRADE";
}
else if ($marks>=90 && $marks<100){
	echo "A+ GRADE";
}
else {
	echo "INVALID INPUT";
}
?>