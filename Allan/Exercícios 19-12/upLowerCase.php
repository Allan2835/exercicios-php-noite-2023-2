<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Selecione entre letras MAÍUSCULAS ou minúsculas</h2>
    <form>
        <input type="name" id="nome" placeholder="Digite seu nome">
        <select id="listaScale">
            <option value="UPPERCASE">Maiúscula</option>
            <option value="LOWERCASE">Minúscula</option>
        </select>
        <button onClick="scale()" type="submit">Converter tamanho</button>
    </form>

    <script>
        function scale() {
            let nome = document.getElementById('nome').value;
            let listaScale = document.getElementById('listaScale').value;

            window.open(`upLowerCaseBack.php?nome=${nome}&&listaScale=${listaScale}`);
        }
    </script>
</body>

</html>