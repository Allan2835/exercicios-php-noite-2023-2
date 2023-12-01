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
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <button onclick="tabuada()" type="submit">tabuada</button>
    </form>

    <script>
        function tabuada() {
            let numero1 = document.getElementById('num1').value;
            window.open(`resolucaodesafio.php?num1=${numero1}`);
        }                                               
    </script>

</body>

</html>