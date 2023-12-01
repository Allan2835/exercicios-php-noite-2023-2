<!-- 3 - Faça um script em PHP que leia três números inteiros e mostre eles na ordem crescente. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Ordene 3 números<h2>
    <form>
        <input type="number" placeholder= "Numero 1" id="num1">
        <input type="number" placeholder= "Numero 2" id="num2">
        <input type="number" placeholder= "Numero 3" id="num3">

        <button onclick="ordenar()" type="submit">Ordenar</button>
    </form>
    <script>
        function ordenar() {
            let nota1 = document.getElementById('num1').value;
            let nota2 = document.getElementById('num2').value;
            let nota3 = document.getElementById('num3').value;

            window.open(`Exercicio03Back.php?num1=${nota1}&&num2=${nota2}&&num3=${nota3}`);
        }
   </script>   
</body>
</html>