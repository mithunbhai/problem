<?php

function year($num)
{	//$num=500;

if ($num%365!=0) {

	$year=floor($num/365);
	$a=$num%365;
	//$b=$num-365;
	$month=floor($a/30);
	$day=$a%30;
   
   echo $year.' '.'Year'.' ' .$month.' '.'Month'.' '.$day.' '.'Days';
	
}


else
{	$year=$num/365;
echo $year. ' '.'Year';
 
}
	
}
year(500);

?>
