<?php
$nome = $_GET["nome"];
$cardapio = $_GET["listaCardapio"];
$result = 0;

switch ($cardapio) {
    case "100":
        $result = "você pediu um cachorro quente. Total de R$12,70";
        break;
    case "101":
        $result = "você pediu um Bauru simples. Total de R$4,00";
        break;
    case "102":
        $result = "você pediu um Bauru com ovo. Total de R$4,60";
        break;
    case "103":
        $result = "você pediu um Hambúrguer. Total de R$15,00";
        break;
    case "104":
        $result = "você pediu um Cheeseburguer. Total de R$13,50";
        break;
    case "105":
        $result = "você pediu um Refrigerante. Total de R$4,50";
        break;
}

echo "<h2>$nome, $result</h2>";