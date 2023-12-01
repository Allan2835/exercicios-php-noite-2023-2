<!-- 5 - O cardápio da lanchonete é dado pela tabela abaixo, insira na tela o código do produto, e retorno o produto e seu valor

Código Produto Preço Unitário (R$) 100 Cachorro quente R$ 12,70 101 Bauru Simples R$ 4,00 102 Bauru com ovo R$ 4,60 103 Hambúrguer
 R$ 15,00 104 Cheeseburger R$ 13,50 05 Refrigerante R$ 4,50 -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 <h2> Insira abaixo o código do produto:<h2>
<form>
        <input type="number" placeholder= "Ex: 000" id="codigo">
        <button onclick="gerar()" type="submit">Gerar</button>
</form>
<script>
        function gerar() {
            let codigo = document.getElementById('codigo').value;

            window.open(`Exercicio05Back.php?codigo=${codigo}`);
        }
   </script>   
 </body>
 </html>