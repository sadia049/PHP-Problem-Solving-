<?php
$student_info = [67, 85, 55, 83];
$age=['peter'=>24,'john'=>45,'Ben'=>30];
if(in_array(55,$student_info,true)):
    echo "There is\n";
else:
    echo "NO\n";
endif;

$offset=array_search('67',$student_info,true);
echo "$offset\n";

if(key_exists('peter',$age)):
    echo"Exists";
else:
    echo "NO\n";
endif;


?>