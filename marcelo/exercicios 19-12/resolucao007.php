<?php

$minimo = $_GET["numero1"];
$maximo = $_GET["numero2"];
$quantidade = 5;


echo "Menor número: $minimo <br>";
echo "Maior número: $maximo<br>";
echo "Será sorteado: $quantidade<br>";

$array = [];

for ($i = 1; $i <= $quantidade; $i++) {
    $randomico = rand($minimo, $maximo);
    // echo $randomico . "<br>";

    $array[] = $randomico;
    sort($array);

}

if ($array[0] < 5) {
    array_shift($array);
    echo "retirou primeira posicao: ";
} else {
}

print_r($array);


?>