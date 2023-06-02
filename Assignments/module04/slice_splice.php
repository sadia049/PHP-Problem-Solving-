<?php
$input = array("a", "b", "c", "d", "e");
$ar = array('a'=>'apple', 'b'=>'banana', 42=>'pear', 'd'=>'orange');
$fruits=array("apple","banana","orange","plum","dates","mango");
$newfruits=array("jackfruit","termarind","pineapple");


//$output = array_slice($input, 2);      // returns "c", "d", and "e"
$output = array_slice($input, -2, 1,true);  // returns "d"
//print_r(array_slice($input, 0, -2));   // returns "a", "b" and "c"
//print_r(array_slice($input,1,-1,true)); // returns b c and d 
//print_r(array_slice($ar,-3,2,true));
//print_r($ar);

//print_r(array_splice($fruits,-5,2,$newfruits));
//print_r($fruits);
$r1=array_slice($fruits,0,2,true);
print_r($r1);

// $r2=array_slice($newfruits,0,null,true);
// print_r($r2);
// $r3=array_slice($fruits,2,null,true);
// print_r($r3);
// $result=array_merge($r1,$r2,$r3);
// print_r($result);



?>