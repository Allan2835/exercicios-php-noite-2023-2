<?php

$minimo = $_GET["numero1"];
$maximo = $_GET["numero2"];
$quantidade = $_GET["numero3"];

echo "Menor número: $minimo <br>";
echo "Maior número: $maximo<br>";
echo "Será sorteado: $quantidade<br>";

$array = [];

for ($i = 1; $i <= $quantidade; $i++) {
    $randomico = rand($minimo, $maximo);
    // echo $randomico . "<br>";

    $array[] = $randomico;
}

print_r($array);


?>