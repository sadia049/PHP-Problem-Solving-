<?php
$str= 'sadia';

if (preg_match("/[^a-z]/i", $str)) 
{
    echo 'matches';
}
else
   echo'no matches';

?>