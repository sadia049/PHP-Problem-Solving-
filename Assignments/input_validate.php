<?php

$options = array(
    'options' => array(
        'default' => 3, // value to return if the filter fails
        // other options here
        'min_range' => 0
    ),
    'flags' => FILTER_FLAG_ALLOW_OCTAL,
);
$var = filter_var('0744', FILTER_VALIDATE_INT, $options);
var_dump($var);
$var2=filter_var('sadianawsin018@gmail.com',FILTER_VALIDATE_EMAIL); 
echo $var2;
if($var2){
    echo "\nHlw";

}
else{
    echo "\nHi";
}





?>