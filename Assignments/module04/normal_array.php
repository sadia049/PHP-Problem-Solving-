<?php
$student_info = [67, 85, 'sadia', 83];

function print_info()
{
    global $student_info;
    for ($i = 0; $i < count($student_info); $i++) {
        echo $student_info[$i] . "\n";
    }
}
//push and pop
//array_pop($student_info);
//array_push($student_info,"Tuba");

//shifta and unshift
array_shift($student_info);
array_unshift($student_info,"99");
print_r($student_info);

print_info();





?>