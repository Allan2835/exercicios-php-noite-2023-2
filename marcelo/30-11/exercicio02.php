<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="number" id="valor1" placeholder="">
        <input type="number" id="valor2" placeholder="">
        <button onclick="calcular()" type="submit">Calcular</button>

    </form>

    <script>
        function calcular() {
            let numero1 = document.getElementById('valor1').value;
            let numero2 = document.getElementById('valor2').value;

            if (numero1 == 1 || numero1 == 2) {
                window.open(`resolucao02.php?num1=${numero1}&&num2=${numero2}`);
            }else{
                alert('erro')
            }
        }

    </script>

</body>

</html>

<!-- 2 - Escreva um script que pergunta ao usuário se ele deseja converter uma temperatura de grau Celsius para Farenheit ou
vice-versa. Se ele digitar/escolher 1, é de Celsius para Farenheit, se digitar/escolher 2 é de Farenheit para Celsius,
outro valor mostre uma mensagem de erro. Para cada conversão, chame a função correta. -->