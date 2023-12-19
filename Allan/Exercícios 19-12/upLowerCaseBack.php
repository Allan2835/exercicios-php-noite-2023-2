<?php
$nome = $_GET["nome"];
$tamanho = $_GET["listaScale"];
echo $tamanho;
switch ($tamanho) {
    case "UPPERCASE":
        echo "<br>" . strtoupper($nome);
        break;
    case "LOWERCASE":
        echo "<br>" . strtolower($nome);
        break;
}
?>