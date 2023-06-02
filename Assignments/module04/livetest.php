<?php
function LongestWord($sen):string {
    $return = '';

    
    $strArrayList = explode(' ', $sen);
    print_r($strArrayList);
    $finalArray = array();

  
    foreach($strArrayList as $str){
        $str = preg_replace("#[[:punct:]]#", "", $str);
        $finalArray[] = $str;
    }
    print_r($finalArray);


    foreach($finalArray as $word){
        if(strlen($word)> strlen($return)){
        $return = $word;
        }
    }    
    
    return $return;

}
$str="The quick brown fox jumped over the lazy dog";
$type=LongestWord($str);
echo $type;
?>