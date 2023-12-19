<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">

        <input type="text" placeholder="Nome completo" id="nomeCompleto">
        <button onclick="transformar()" type="submit">Transformar</button>

    </form>
    <script>
        function transformar() {
            let nomeCompleto = document.getElementById('nomeCompleto').value;

            window.open(`resolucao002.php?result=${nomeCompleto}`);
        }
    </script>
</body>

</html>

<!--2 - Insira seu nome na tela, e crie um script com função para retornar um array onde cada posição do array contenha uma
parte do seu nome. -->