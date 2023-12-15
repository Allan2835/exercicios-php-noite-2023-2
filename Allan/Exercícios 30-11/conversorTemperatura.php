<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
</head>
<style>
    input {
        margin-bottom: 5px;
        display:flex;
    }
    button {
        margin-bottom: 10px;

        padding: 0 5px 0;
    }
</style>

<body>
    <h2>Temperatura</h2>
    <form>
        <input type="number" id="valor1" placeholder="Digite a temperatura">
        <select id="temperaturas">
            <option value="Celsius">Celsius</option>
            <option value="Farenheit">Farenheit</option>
        </select>
        <button OnClick="temperatura()" type="submit">Mudar temperatura</button>
    </form>

    <script>
        function temperatura() {
            let valor1 = document.getElementById('valor1').value
            let temperaturas = document.getElementById('temperaturas').value;

            window.open(`conversorBack.php?valor1=${valor1}&&temperaturas=${temperaturas}`);
        }
    </script>
</body>

</html>