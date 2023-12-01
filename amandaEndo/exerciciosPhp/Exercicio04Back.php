<!-- Desenvolva um script calculadora com os 4 operadores somar, subtrair, dividir e multiplicar. -->
<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$opera = $_GET['opera'];

    switch ($opera) {
        case 'somar':
            $result = $num1 + $num2;
            echo "A soma é: $result";
            break;
        case 'subtrair':
            $result = $num1 + $num2;
            echo "A subtração é: $result";
            break;
        case 'multiplicar':
            $result = $num1 * $num2;
            echo "A multiplicação é: $result";
            break;
        case 'dividir':
            $result = $num1 / $num2;
            echo "A divisão é: $result";
            break;
    }

?>
