<?php

echo "3 - Dentro do array abaixo, em cada posição contém um valor, escreva um script que receba uma string com os números. Array[2, 90, 5, 32, 45, 1, 73]<br><br>";

$arrayNomeCompleto = [2, 90, 5, 32, 45, 1, 73];

print_r($arrayNomeCompleto);

$string = implode(", ", $arrayNomeCompleto);

echo "<br><br> String montada: $string";
?>