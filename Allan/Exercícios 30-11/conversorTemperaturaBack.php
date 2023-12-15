<?php
$valor1 = $_GET["valor1"];
$temperaturas = $_GET["temperaturas"];
$result = 0;

switch ($temperaturas) {
    case "Farenheit":
        $result = ($valor1 - 32) * 5 / 9;
        break;
    case "Celsius":
        $result = ($valor1 * 9/5) + 32;
        break;
    }
echo $result;
?>