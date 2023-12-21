<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">

        <input type="date" placeholder="Data de nascimento" id="data">
        <button onclick="calcular()" type="submit">calcular</button>

    </form>
    <script>
        function calcular() {
            let num1 = document.getElementById('data').value;

            window.open(`resolucao005.php?numero1=${num1}`);
        }
    </script>
</body>

</html>

<!-- 5 - Escreva uma programa que receba a data de nascimento, calcule quantos dias de vida você já está abrilhantando esse
mundão. -->