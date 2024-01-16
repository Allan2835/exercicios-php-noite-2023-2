    <?php
    $num1 = $_GET["num1"];
    $conta = $_GET["calc"];
    $num2 = $_GET["num2"];
    echo "número 1: $num1<br>";
    echo "número 2: $num2<br>";
    echo "operação: $conta<br>";
    switch ($conta) {
        case "somar":
            $result = $num1 + $num2;
            echo "Resultado: $result";
            break;
        case "subtracao":
            $result = $num1 - $num2;
            echo "Resultado: $result";
            break;
        case "multiplicacao":
            $result = $num1 * $num2;
            echo "Resultado: $result";
            break;
        case "divisao":
            $result = $num1 / $num2;
            echo "Resultado: $result";
            break;
        default:
        echo "operação errada";
        break;
}
?>