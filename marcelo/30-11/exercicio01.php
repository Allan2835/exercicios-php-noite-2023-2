<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="number" id="valor1">
        <input type="number" id="valor2">
        <input type="number" id="valor3">
        <button onclick="calcular()" type="submit">Calcular</button>

    </form>

    <script>
        function calcular() {
            let numero1 = document.getElementById('valor1').value;
            let numero2 = document.getElementById('valor2').value;
            let numero3 = document.getElementById('valor3').value;

            window.open(`resolucao01.php?num1=${numero1}&&num2=${numero2}&&num3=${numero3}`);
        }

    </script>

</body>

</html>

<!-- 1 - Faça um programa, com uma função que necessite de três argumentos, e que forneça a soma desses três argumentos
através de uma função. Seu script também deve fornecer a média dos três números, através de uma segunda função que chama
a primeira. Obs. faça uma validação para não deixar o usuário enviar inputs vazios. -->