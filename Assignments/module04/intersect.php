<?php
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "b" => "yellow", "c"=>"blue", "green","red");
$result_array1 = array_intersect($array1, $array2);
$result_array = array_intersect_assoc($array1, $array2);

$array11 = array("a" => "green", "red", "blue", "red");
$array22 = array("b" => "green", "yellow", "red");
//$result = array_diff($array11, $array22);
$result = array_diff_assoc($array11, $array22);
//print_r($result);
print_r($result_array);

$fruits1 = array("apple", "banana", "orange");
$fruits2 = array("orange","apple", "grape", "kiwi");
$fruits3 = array("apple", "pear", "kiwi");

 //Find the intersection of the arrays
 print_r(array_intersect( $fruits1, $fruits2, $fruits3 ));
?>