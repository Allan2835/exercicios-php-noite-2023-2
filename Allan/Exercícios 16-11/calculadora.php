<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <h2>Calculadora</h2>
    <form>
        <input type="number" id="num1" placeholder="Número 2">
        <input type="number" id="num2" placeholder="Número 1">
        <select id="operacao">
            <option value="somar">+</option>
            <option value="subtrair">-</option>
            <option value="multiplicar">*</option>
            <option value="dividir">/</option>
        </select>
        <button onClick="calcular()" type="submit">Calcular</button>
    </form>
    <script>
        function calcular() {
            let num1 = document.getElementById('num1').value;
            let num2 = document.getElementById('num2').value;
            let operacao = document.getElementById('operacao').value;

            window.open(`calculadorBack.php?num1=${num1}&&num2=${num2}&&operacao=${operacao}`)
        }
    </script>
</body>

</html>