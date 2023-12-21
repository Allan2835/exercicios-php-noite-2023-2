<?php

$arrayEscolha = intval($_GET["array"]);
$ordem = intval($_GET["numero1"]);
$ordemNumero = intval($ordem);
$arrayNumero = intval($arrayEscolha);

$array1 = [2, 90, 100, 1, 4, 7];
$array2 = [3, 7, 13, 87, 1, 2, 69];

if ($arrayEscolha == 1) {
    if ($ordem == 1) {
        sort($array1);
        print_r($array1);
    } else {
        rsort($array1);
        print_r($array1);
    }
} else {
    if ($ordem == 1) {
        sort($array2);
        print_r($array2);
    } else {
        rsort($array2);
        print_r($array2);
    }
}
?>