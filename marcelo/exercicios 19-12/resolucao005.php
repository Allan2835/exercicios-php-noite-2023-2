<?php
echo "Data de hoje: " . date('Y-m-d') . "<br>";

$dataInicio = $_GET["numero1"];

$dataHj = date('Y-m-d');

$difData = abs((strtotime($dataInicio) - strtotime($dataHj)));

echo $dias = "Dias: " . floor($difData / (60 * 60 * 24)) . "<br>";
echo $meses = "Meses: " . floor($difData / (60 * 60 * 24 * 31)) . "<br>";
echo $anos = "Anos: " . floor($difData / (60 * 60 * 24 * 31 * 12)) . "<br>";

?>