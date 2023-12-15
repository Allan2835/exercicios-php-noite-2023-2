<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

function resultadoFInal ($num1, $num2, $num3)
{
    $media = soma($num1, $num2, $num3) / 3;

    $result = [
        'media' => $media,
        'soma' => soma($num1, $num2, $num3)
    ];
    return $result;
}

function soma($num1, $num2, $num3) {
    $soma = $num1 + $num2 + $num3;
    return $soma;
}

$resultado = resultadoFinal ($num1, $num2, $num3);

var_dump($resultado);

echo "<br A soma é: " .$resultado['soma']." e da média é: " .$resultado['media'];
?>