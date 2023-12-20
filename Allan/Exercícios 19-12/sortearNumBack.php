<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

$i = 0;
$randomico = rand($num1,$num2);
echo $randomico;

for ($i = 1; $i <= $num3; $i++) {
    echo $i;
}

?>