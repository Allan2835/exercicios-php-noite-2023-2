<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Notas</title>
</head>

<body>
    <form>
        <input type="number" id="nota1" placeholder="Primeira nota">
        <input type="number" id="nota2" placeholder="Segunda nota">

        <button onClick='calcular()' type="submit">Calcular</button>
    </form>
    <script>
        function calcular() {
            let nota1 = document.getElementById('nota1').value;
            let nota2 = document.getElementById('nota2').value;

            window.open(`notasBack.php?nota1=${nota1}&&nota2=${nota2}`)
        }
    </script>
</body>

</html>