<?php
    $phy=60;
    $chem=60;
    $math=60;
    $total=$phy+$chem+$math;
    $per=$total/3;
    echo "Physics Mark is $phy<br>";
    echo "Chemistry Mark is $chem<br>";
    echo "Mathematics Mark is $math<br>";
    echo "Total is $total, Percentage is $per<br>";
    if($per>=70)
    {
       echo "Congratulation";
       echo "<br>You get Distinction";
    }
   else if($per>=60)
       echo "First Class";
   else if($per>=40)
       echo "Pass Class";
   else
      echo "You Are Fail";
?>