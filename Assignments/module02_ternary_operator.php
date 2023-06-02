<?php



$tution_fee = 20000;
$commission = $tution_fee + 0;


//conditions
$result = ($tution_fee > 20000) ? $commission * 0.25 : (($tution_fee > 10000 && $tution_fee <20000) ? $commission * 0.20  : (($tution_fee > 7000 && $tution_fee <10000) ? $commission * 0.15 : "Invalid"));
echo "Commission fee is $result";


?>