<?php
// echo "deu certo!";

$nomeCompleto = $_GET["result"];
$valor1 = $_GET["numero001"];

// echo "<br>" . $nomeCompleto;
// echo "<br>" . $valor1;

if ($valor1 == 1) {
    echo "<br>" . strtoupper($nomeCompleto);
} else {
    echo "<br>" . strtolower($nomeCompleto);
}

?>