<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <select id="num1">
            <option value="1">Array1[2, 90, 100, 1, 4, 7]</option>
            <option value="2">Array2[3, 7, 13, 87, 1, 2, 69]</option>
        </select>
        <select id="num2">
            <option value="1">Ordem crescente</option>
            <option value="2">Ordem decrescente</option>
        </select>

        <button onclick="ordenar()" type="submit">Ordenar</button>

    </form>
    <script>
        function ordenar() {
            let num1 = document.getElementById('num1').value;
            let num2 = document.getElementById('num2').value;

            window.open(`resolucao006.php?array=${num1}&&numero1=${num2}`);
        }
    </script>
</body>

</html>

<!-- 6 - Escreva um código onde o usuário possa escolher um dos arrays abaixo e selecionar se ele quer ordenar de maneira
crescente ou de maneira decrescente. Separe as ordenações em funções diferentes e chame elas dependendo da escolha.
Array1[2, 90, 100, 1, 4, 7] Array2[3, 7, 13, 87, 1, 2, 69] -->