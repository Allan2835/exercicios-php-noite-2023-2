<!-- 1 - Desenvolva um script com mensagens de saudações. Crie uma variável para inserir um horário e a partir do horário realizar as verificações,
 se o horário for até as 12 horas, escreva Bom dia, se passar das 12 e for até as 18 horas escreva boa tarde e se passar das 18 horas
  até a 0 horas escreva boa noite (if else); -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <h2>Que horas são?<h2>
  <form>
        <input type="horario" placeholder= "Horário" id="hora">
        <button onclick="verificar()" type="submit">Gerar</button>
    </form>
  <script>
    function verificar() {
            let hora = document.getElementById('hora').value;

            window.open(`Exercicio01Back.php?hora=${hora}`);
    }
    </script>
  </body>
  </html>