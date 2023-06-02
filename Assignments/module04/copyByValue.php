<?php
$valuear=array("name"=>"sadia","university"=>"aust","dept"=>"cse");
function copyByvalue( array &$valuear){

    $valuear["dept"]="eee";
    print_r($valuear);


}
copyByvalue($valuear);

print_r($valuear);




?>