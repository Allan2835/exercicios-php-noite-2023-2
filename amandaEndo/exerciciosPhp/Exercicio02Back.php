<!-- 2 - Desenvolva um script que recebe duas notas de um aluno. Em seguida deve ser calcular a média do aluno e dar o seguinte resultado: 
A mensagem "Aprovado", se a média alcançada for maior ou igual a seis; A mensagem "Reprovado", se a média for menor do que seis; 
A mensagem "Aprovado com Distinção", se a média for igual a dez. (switch case) -->
<?php
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];

$media = ($nota1 + $nota2) / 2;
// echo $media;
// die();
if ($media >= 6 && $media <= 10) {
    echo 'Aprovado';   
} else if ($media <= 5) {
    echo 'Reprovado!'; 
} else if ($media == 10) {
  echo 'Aprovado com Distinção';
}
?>