<?php

function stringLength()
{
global $arrayOfStrings,$word;
foreach ($arrayOfStrings as $singleword) {
if (strlen($word) < strlen($singleword))
     $word = $singleword;
}
return $word;
}
$data = "The fox jumped over the lazy dog";
//list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
$arrayOfStrings = explode(" ", $data);
$word = $arrayOfStrings[0];
print_r($data);
stringLength();
echo "\n\n";
echo "The longest word in the senetnce is " . $word;


$replace = array("1: AAA", "2: AAA", "3: AAA");
$sep = implode($replace);
echo $sep."\n";

var_dump($sep);
$ss="Ï AM A CSE STUDENT";
echo explode(" ",$ss);



// Replace AAA in each string with BBB
//echo implode("<br>",substr_replace($replace,'BBB',3,3));
?>