<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="text" placeholder="Horário" id="hora">

        <button onclick="gerar()" type="submit">Gerar</button>
    </form>

    <script>
        function gerar() {
            let horario = document.getElementById('hora').value;

            window.open(`resolucao1.php?result=${horario}`);
        }
    </script>

</body>

</html>
<!-- 
1 - Desenvolva um script com mensagens de saudações. Crie uma variável para inserir um horário e a partir do horário
realizar as verificações, se o horário for até as 12 horas, escreva Bom dia, se passar das 12 e for até as 18 horas
escreva boa tarde e se passar das 18 horas até a 0 horas escreva boa noite (if else); -->