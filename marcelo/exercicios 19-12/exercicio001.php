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
            <option value="1">LETRAS MAIÚSCULAS</option>
            <option value="2">letras minúsculas</option>
        </select>
        <input type="text" placeholder="Nome completo" id="nomeCompleto">
        <button onclick="verificar()" type="submit">Verificar</button>

    </form>
    <script>
        function verificar() {
            let numero001 = document.getElementById('num1').value;
            let nomeCompleto = document.getElementById('nomeCompleto').value;

            window.open(`resolucao001.php?result=${nomeCompleto}&&numero001=${numero001}`);
        }
    </script>
</body>

</html>

<!-- 1 - Crie um script para inserir o seu nome completo, e um campo de opções para escolher letras maiúsculas ou minúsculas,
em seguida crie uma função para deixar todo o seu nome em maiúsculo e uma para deixar todo o seu nome em minúsculo, e
utilize a função e transforme seu nome de acordo com a escolha em tela realizada. -->