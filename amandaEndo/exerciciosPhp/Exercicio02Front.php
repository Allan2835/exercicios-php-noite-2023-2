<!-- 2 - Desenvolva um script que recebe duas notas de um aluno. Em seguida deve ser calcular a média do aluno e dar o seguinte resultado: 
A mensagem "Aprovado", se a média alcançada for maior ou igual a seis; A mensagem "Reprovado", se a média for menor do que seis; 
A mensagem "Aprovado com Distinção", se a média for igual a dez. (switch case) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calcule sua média<h2>
    <form>
        <input type="number" placeholder= "Nota 1" id="nota1">
        <input type="number" placeholder= "Nota 2" id="nota2">

        <button onclick="media()" type="submit">calcular</button>
    </form>
    <script>
        function media() {
            let nota1 = document.getElementById('nota1').value;
            let nota2 = document.getElementById('nota2').value;

            window.open(`Exercicio02Back.php?nota1=${nota1}&&nota2=${nota2}`);
        }
   </script>   
</body>

</html>