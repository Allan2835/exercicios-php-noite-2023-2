<?php

$valor = $_GET["num1"];
echo "Tabuada do " . $valor . "<br>";
for ($i = 0; $i <= 10; $i++) {
    // echo $valor * $i;
    // echo"<br>";
    echo "$valor x " . $i . " = " . $valor * $i . "<br>";
}
?>