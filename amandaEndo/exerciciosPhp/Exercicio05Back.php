<!-- 5 - O cardápio da lanchonete é dado pela tabela abaixo, insira na tela o código do produto, e retorno o produto e seu valor

Código Produto Preço Unitário (R$) 100 Cachorro quente R$ 12,70 101 Bauru Simples R$ 4,00 102 Bauru com ovo R$ 4,60 103 Hambúrguer
 R$ 15,00 104 Cheeseburger R$ 13,50 05 Refrigerante R$ 4,50 -->
 <?php
$cod = $_GET['codigo'];

    switch ($cod) {
        case '100':
            $result = 12.70;
            echo "O cachorro-quente é $result";
            break;
        case '101':
            $result = 4.00;
            echo "O bauru simples é $result";
            break;
        case '102':
            $result = 4.60;
            echo "O bauru com ovo é $result";
            break;
        case '103':
            $result = 15.00;
            echo "O hamburguer é $result";
            break;
        case '104':
            $result = 13.50;
            echo "O cheeseburger é $result";
            break;    
         case '105':
            $result = 4.00;
            echo "O refrigerante é $result";
            break;
    }

?>
