<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Sorteador de números</h2>
    <form>
        <input type="number" id="num1" placeholder="Digite um número">
        <input type="number" id="num2" placeholder="Digite um número">
        <input type="number" id="num3" placeholder="Digite quantidade de números a serem sorteados">
        <button onClick="sortearNumeros()">Sortear números!</button>
    </form>

    <script>
        function sortearNumeros() {
            let num1 = document.getElementById('num1').value;
            let num2 = document.getElementById('num2').value;
            let num3 = document.getElementById('num3').value;

            window.open(`sortearNumBack.php?num1=${num1}&&num2=${num2}&&num3=${num3}`)
        }
    </script>
</body>
</html>