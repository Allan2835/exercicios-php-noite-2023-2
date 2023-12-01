<!-- Desenvolva um script com front e back end, onde o usuário escolhe um número (do 1 ao 10) e na tela apareça a tabuada calculada
 escolhida. Detalhe: o campo de escolha deve ser do tipo “select” e as opções dos números devem ser dinâmicas através
  de um “for” dentro do select. Ou seja nesse exercício, deve-se misturar o PHP com o HTML, tomem cuidado e lembrem-se das
   aberturas das Tags necessárias -->
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
   <body>
    <h2>Escolha o número e gere a tabuada:<h2>
    <form>
    <label for="tabuada"> Escolher</label>
	<select name="tabuada" id="tabuada">
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>

       
	</select>

        <button onclick="calcular()" type="submit">Gerar</button>
    </form>
    <script>
        function calcular() {
            let num = document.getElementById('tabuada').value;

            window.open(`DesafioBack.php?num=${num}`);
        }
   </script>   
   </body>
   </html>