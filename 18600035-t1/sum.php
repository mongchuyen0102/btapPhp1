<?php

$a = $_POST['number1'];
$b = $_POST['number2'];
function sum($a, $b){
 $sum = $a + $b;
 return $sum;
}
echo sum($a, $b);
?>