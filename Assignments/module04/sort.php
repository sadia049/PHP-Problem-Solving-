<?php
$ar = array('a'=>'apple', 'b'=>'banana', 42=>'pear', 'd'=>'orange');
$student_info = [67, 85, 55, 83];
$fruits=array("apple","banana",'Banana',"Orange","plum","dates","mango");
$newfruits = array(
    "Orange1", "orange2", "Orange3", "orange20","orange15"
);

sort($student_info);
print_r($student_info);

//arsort($ar,SORT_NUMERIC);
//print_r($ar);

asort($newfruits,SORT_NATURAL | SORT_FLAG_CASE);
print_r($newfruits);





?>