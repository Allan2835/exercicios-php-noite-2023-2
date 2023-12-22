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
        <select name="" id="num3">
            <option value="1">5</option>
        </select>
        <button onclick="gerar()" type="submit">Gerar</button>

    </form>
    <script>
        function gerar() {
            let num1 = document.getElementById('num1').value;
            let num2 = document.getElementById('num2').value;
            let num3 = document.getElementById('num3').value;

            window.open(`resolucao007.php?numero1=${num1}&&numero2=${num2}&&numero3=${num3}`);
        }
    </script>
</body>

</html>

<!-- 7 - Faça um código onde irá gerar 5 números aleatórios. Com esses números gerados, monte um array e caso a primeira
posição seja menor que 5, remova o primeiro valor. -->