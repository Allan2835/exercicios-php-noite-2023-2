<?php
// echo "Deu certo!";

$valor1 = $_GET["num1"];
$valor2 = $_GET["num2"];


// echo " $valor1";
// echo " $valor2";


function celsius($celsius) {
    $result = ($celsius * 9 / 5) + 32;
    return $result;
}

function fahrenheit($f) {
    $result = 5 / 9 * ($f - 32);
    return $result;
}

if($valor1 == 1) {
    echo celsius($valor2);

} else {
    echo fahrenheit($valor2);
}





?>