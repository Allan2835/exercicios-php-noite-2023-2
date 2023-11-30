<?php

// echo "Deu certo! <br>";

function somar($valor1, $valor2, $valor3)
{
    $result = $valor1 + $valor2 + $valor3;
    return $result;
}

$valor1 = $_GET["num1"];
$valor2 = $_GET["num2"];
$valor3 = $_GET["num3"];
echo "Valor1 é igual à " . $valor1 . "<br>";
echo "Valor2 é igual à " .$valor2 . "<br>";
echo "Valor3 é igual à " .$valor3 . "<br>";

echo "A soma é " . somar($valor1, $valor2, $valor3) . "<br>";

function media($valor1, $valor2, $valor3)
{
    $media = somar($valor1, $valor2, $valor3);
    $media2 = $media / 3;
    return $media2;
}

$media = media($valor1, $valor2, $valor3);


echo "A média é " . $media;


?>