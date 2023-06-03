<?php



//1.Problem: Sort an array of student names by their average test scores, in descending order:

// $students = array(
//   "Alice" => array(95,73,99),
//   "Bob" => array(80, 90, 95),
//   "Charlie" => array(85, 75, 80)
// );

// //   Calculate the average test scores for each student

// foreach ($students as $name => $scores) {
// echo $name;
//   //var_dump($scores);
//   $avg_score = array_sum($scores) / count($scores);
//   $students['avg_score'] = $avg_score;
// }
//  print_r($students);


$array = array(1, "hello", 1, "world", "hello");
print_r(count($array));
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));

$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);
?>
?>







?>