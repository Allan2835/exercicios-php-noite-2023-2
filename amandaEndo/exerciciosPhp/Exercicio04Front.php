<!-- Desenvolva um script calculadora com os 4 operadores somar, subtrair, dividir e multiplicar. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Insira os números para calcular<h2>
<form>
        <input type="number" placeholder= "Valor 1" id="num1">
        <input type="number" placeholder= "Valor 2" id="num2">
</form>
   <h2> Operação: <h2>
<form>
        <input type="text" placeholder= "Ex: somar" id="opera">
        <button onclick="calcular()" type="submit">Calcular</button>
</form>    
    <script>
        function calcular() {
            let num1 = document.getElementById('num1').value;
            let num2 = document.getElementById('num2').value;
            let opera = document.getElementById('opera').value;

            window.open(`Exercicio04Back.php?num1=${num1}&&num2=${num2}&&opera=${opera}`);
        }
   </script>   
</body>
</html>