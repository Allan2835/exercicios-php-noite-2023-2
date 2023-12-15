<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAA</title>
</head>
<body>
    <form>
        <input type="number" placeholder="Insira o horário" id="horario">
        <button onClick="saudacao()" type="submit">Calcular</button>
    </form>

    <script>
        function saudacao() {
            let horario = document.getElementById('horario').value;

            window.open(`horariosBack.php?horario=${horario}`)
        }
    </script>
</body>

</html>