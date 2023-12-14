<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            align-items: center;
            text-align: center;
        }

        h2 {
            font-size: 2em;
        }

        select #cardapio {
            margin-left: 5px;
            font-size: 1rem;
        }

        button {
            margin-top: 8px;
            font-size: 1rem;
            padding: 5px 5px 5px;
        }
    </style>
    <h2>Selecione o número do seu pedido</h2>
    <form>
        <input type="name" id="nome" placeholder="Digite seu nome">
        <select id="listaCardapio">
            <option value="100">100</option>
            <option value="101">101</option>
            <option value="102">102</option>
            <option value="103">103</option>
            <option value="104">104</option>
            <option value="105">105</option>
        </select><br>
        <button onClick="cardapio()" type="submit">Fazer o pedido</button>
    </form>

    <script>
        function cardapio() {
            let nome = document.getElementById('nome').value;
            let listaCardapio = document.getElementById('listaCardapio').value;

            window.open(`cardapioBack.php?nome=${nome}&&listaCardapio=${listaCardapio}`);
        }

    </script>
</body>

</html>