<?php

include '../16-01/Classe.php';

$valor1 = $_GET["num1"];
$valor2 = $_GET["num2"];

if ($valor1 == 1) {
    echo Classe::celsius($valor2);

} else {
    echo Classe::fahrenheit($valor2);
}

?>