<?php

// $a = [1,3,4,2,7,6,9,8] ; 
// $even = [];
// $odd=[];
// foreach ($a as  $value) {
// 	if($value %2 == 0){

// 	 $even[] = $value;
// 	}
// 	else
//       $odd[]=$value;
// }
// print_r($even);
// print_r($odd);
//$teacher = array('i','am', 'mr', "hasnat");


// for($i=0; $i< count($teacher); $i++)
// {
// 	echo $teacher[$i] . ' ' ;
// }

// foreach($teacher as $value)
// {
// 	echo $value . ' '	;
// }

 //$i = 0;
// while ($i < count($teacher)) {
   
//    echo $teacher[$i] .' ';
//    $i++;
// }
/*$i=0;
do {
 echo $teacher[$i] . ' ' ;
 $i++;	
} while ( $i <count($teacher));*/

$num=array(1,2,3,5,8,10,11,23,34,35,50,55);
$even=[];
$odd=[];
 for ($si=0; $si <count($num) ; $si++)
  { 
	if($num[$si]%2==0)
     
      {

	   
	   $even[]=$num[$si];
	   
// 	   //$odd=$num[$si];
// 	   //echo $num[$si]. ' '. 'This numbers are even' ;
// 	   echo $even . ' ' . 'This numbers is even'. '<br>' . ' <br>' ;
	   

}
   
    else 

      $odd[]=$num[$si];
//    	  //echo $num[$si] . ' ' ;


}

print_r($even);
print_r($odd);  
   	  

   
  //else
  	//echo '</br>';

   	//echo $num[$si] .' '. 'This numbers are odd';
   	//echo $odd .' ' ;
    //$odd=$num[$si];
    //echo $odd . ' ';


 ?>
