<?php

//function to check even or odd
function evenOrOdd(int $num):bool{

return  ($num%2==0)? true:false;

}
$num=46;

$result= evenOrOdd($num);
if($result):
    echo "The number $num is even\n";
else:
    echo "The number  $num is odd\n";
endif;

//function to check even or odd


//calculate series
  $sum=0;
for($i=1;$i<=100;$i++){
   global $sum;
   $sum+=$i;

}
echo "The sum of the series is $sum";
  









?>