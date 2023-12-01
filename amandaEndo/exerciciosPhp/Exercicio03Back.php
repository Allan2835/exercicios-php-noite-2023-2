<!-- 3 - Faça um script em PHP que leia três números inteiros e mostre eles na ordem crescente. -->
<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];


// echo "$num1 $num2 $num3";

if ($num1 < $num2 && $num1 < $num3) {
    if ($num2 < $num3) {
        echo "$num1 $num2 $num3";
    } else {
        echo "$num1 $num3 $num2";
    }
} else if ($num2 < $num1 && $num2 < $num3) {
    if ($num1 < $num3) {
        echo "$num2 $num1 $num3";
    } else {
        echo "$num2 $num3 $num1";
    }
} else if ($num3 < $num2 && $num3 < $num1) {
    if ($num1 < $num2) {
        echo "$num3 $num1 $num2";
    } else {
        echo "$num3 $num2 $num1";
    }
}

// if($num2 < $num1){
//  $valor=$num1;
//  $num1=$num2;
//  $num2=$valor;
// }

// else if($num3 < $num1){
//  $valor=$num1;
//  $num1=$num3;
//  $num3=$valor;
// }

// else if($num3 < $num2){
//  $valor=$num2;
//  $num2=$num3;
//  $num3=$valor;
// }

// echo "$num1 < $num2 < $num3";
?>
