<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">

        <input type="number" placeholder="Número mínimo" id="num1">
        <input type="number" placeholder="Número Máximo" id="num2">
        <input type="number" placeholder="Quantidade de números" id="num3">
        <button onclick="gerar()" type="submit">Gerar</button>

    </form>
    <script>
        function gerar() {
            let num1 = document.getElementById('num1').value;
            let num2 = document.getElementById('num2').value;
            let num3 = document.getElementById('num3').value;

            window.open(`resolucao004.php?numero1=${num1}&&numero2=${num2}&&numero3=${num3}`);
        }
    </script>
</body>

</html>

<!-- 4 - Crie um sorteador dinâmico com três entrada na tela, sendo elas, a primeira e a segunda entrada o gap de números que
irá gerar, e a terceira entrada a quantidade de números que serão sorteados, e apresente na tela todos os resultados. -->