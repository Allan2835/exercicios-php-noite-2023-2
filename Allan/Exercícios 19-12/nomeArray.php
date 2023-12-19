<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form >
        <input type="name" id="nome" placeholder="Digite seu nome completo">
        <button onClick="separarNome()" type="submit">Separar</button>
    </form>

    <script>
        function separarNome() {
            let nome = document.getElementById('nome').value;

            window.open(`nomeArrayBack.php?nome=${nome}`);
        }
    </script>
</body>
</html>