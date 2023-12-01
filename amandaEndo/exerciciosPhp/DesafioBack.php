<!-- Desenvolva um script com front e back end, onde o usuário escolhe um número (do 1 ao 10) e na tela apareça a tabuada calculada
 escolhida. Detalhe: o campo de escolha deve ser do tipo “select” e as opções dos números devem ser dinâmicas através
de um “for” dentro do select. Ou seja nesse exercício, deve-se misturar o PHP com o HTML, tomem cuidado e lembrem-se das
aberturas das Tags necessárias -->
<?php
$i = $_GET['num'];

for ($num = 0; $num <= 10; $num ++){
    $calc = $i * $num;
    echo "$i x $num = $calc<br>";
}
?>