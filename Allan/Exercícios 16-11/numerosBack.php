<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

$numeros = array($num1, $num2, $num3);

// var_dump($numeros);


sort($numeros);

print_r($numeros);  
?>
 