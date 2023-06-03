
<?php

$str="     Sadia     :";
echo $str."\n";
echo trim($str);
// $string = "The quick brown fox jumps over the lazy dog";
// $position = strpos($string, "brown");
// echo ($position)?  "found it":"couldnot found";
// echo $position;


// $string = "Hello, world!";
// $characters = str_split($string,2);
// print_r($characters);


//1. date(): This function is used to format a timestamp into a human-readable date string.
// Use Case: Formatting the current date.

//  $date = date('Y-m-d');
//  echo $date;


//2. time(): This function is used to get the current timestamp.
// Use Case: Getting the current timestamp.

// 3.strtotime(): This function is used to parse a date string into a timestamp.
// Use Case: Parsing a date string into a timestamp.

// $timestamp = strtotime('2023-02-18');
// echo $timestamp."\n";

// 4.mktime(): This function is used to create a timestamp from a specified date and time.
// Use Case: Creating a timestamp from a specified date and time.

// $timestamp = mktime(0, 0, 0, 2, 18, 2023);   
// echo $timestamp;

//5. date_diff(): This function is used to calculate the difference between two dates.
// Use Case: Calculating the difference between two dates.

// $date1 = new DateTime('2000-02-18');
// $date2 = new DateTime('2023-03-18');
// $interval = date_diff($date1, $date2);
// print_r($interval);


?>