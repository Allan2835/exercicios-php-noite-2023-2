<?php

$nomeArray = $_GET["nome"];
$nomeCompleto = $nomeArray;
$nomeArray = explode(" ",$nomeCompleto);

print_r($nomeArray);    
?>