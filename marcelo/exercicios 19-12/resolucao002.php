<?php
// echo "deu certo!";

$nomeCompleto = $_GET["result"];

echo $nomeCompleto . "<br>";

echo "<br>";

$nomeArray = explode(" ", $nomeCompleto);

print_r($nomeArray);
?>