<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$operacao = $_GET["operacao"];
$result = [];
switch ($operacao) {
    case "somar":
        $result = $num1 + $num2;
        break;
    case "subtrair":
        $result = $num1 - $num2;
        break;
    case "multiplicar":
        $result = $num1 * $num2;
        break;
    case "dividir":
        if ($num2 != 0) {
            $echo = $num1 / $num2;
        }
}

echo "<h1> Seu cálculo deu: $result </h1> ";

?>

<h1></h1>