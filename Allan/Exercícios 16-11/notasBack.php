<?php
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$media = ($nota1 + $nota2) / 2;

if ($media >= 6 && $media < 10) {
    echo "Aprovado, sua média foi: $media";
} else if ($media < 6) {
    echo "Reprovado, sua média foi: $media";
} else if ($media == 10) {
    echo "Aprovado com Dinstinção, sua média foi: $media";
}

?>