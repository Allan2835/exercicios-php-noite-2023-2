<?php

// exemplo multiplos de 10

echo "Anonymous function <br><br>";

$array = [10, 13, 15, 20, 25, 27, 29, 35, 40];

echo "<pre>";
print_r($array);
echo "<pre>";

$numeros = array_filter($array, function ($item) {
    return $item % 10 == 0;
});
echo "<br>multiplos<br>";
echo "<pre>";
print_r($numeros);
echo "<pre>";

//-------------------------------------------------------
//arrow function
// basicamente simplifica a função anonima(mto utilizada para casos simples)

echo "Arrow function<br><br>";

$array = [10, 13, 15, 20, 25, 27, 29, 35, 40];

echo "<pre>";
print_r($array);
echo "<pre>";

$numeros = array_filter($array, fn($item) => $item % 5 == 0);

echo "<pre>";
print_r($array);
echo "<pre>";
echo "<br>multiplos<br>";
echo "<pre>";
print_r($numeros);
echo "<pre>";

//-------------------------------------------------------
// funçoes recursivas
echo "Recursiva <br><br>";

function dividir($numero)
{
    $result = $numero / 2;
    echo "$numero <br>";

    if (round($result) > 0) {
        dividir($result);
    }
}

dividir(50);

//----------------------------------------------------------
//função numero absoluto (num positivo)

echo "<br> Absoluto <br>";

$num = -9.5;

echo abs($num);

// ---------------------------------------------------------
//Função PI

echo "<br><br> PI <br>";

echo pi();

//----------------------------------------------------------
// Função arredondar num p baixo
echo "<br><br> Arredondar num para baixo <br>";

$n = 2.8;
echo $n . "<br>";

echo floor($n);

echo "<br><br> Arredondar num para cima <br>";
$n2 = 3.3;
echo $n2 . "<br>";

echo ceil($n2);

echo "<br><br> Arredondar <br>";
$n3 = 10.8;
echo $n3 . "<br>";

echo round($n3);

echo "<br><br> Arredondar casa decimais <br>";
$n4 = 3.653647;
echo "<br>" . $n4 . "<br>";

$testePi = pi();
echo "<br>" . $testePi;
echo "<br>";
echo round($n4, 2);
echo "<br>" . round($testePi, 2);

//----------------------------------------------------------
// Função num aleatório
echo "<br><br> Número aleatório <br>";

$randomico = rand(2, 100);

echo $randomico;

//----------------------------------------------------------
// Função num menor e maior do array
echo "<br><br> Número num maior <br>";

$nMaior = [3, 6, 8, 9, 10, 25, 99];

echo max($nMaior);

echo "<br><br> Número num menor <br>";

$nMenor = [3, 6, 8, 9, 10, 25, 99];

echo min($nMenor);

//----------------------------------------------------------
// Função retirar espaços
echo "<br><br> Manipulação de string <br>";
echo "<br> Retirar espaços <br>";

$nomeComEspaço = "             Marcelo            ";

// echo "teste<br>". $nomeComEspaço;

$nomeSemEspaço = trim($nomeComEspaço);

echo "<br> com espaço " . strlen($nomeComEspaço);
echo "<br> sem espaço " . strlen($nomeSemEspaço);

//----------------------------------------------------------
// Função lower/upper
echo "<br><br> lower case <br>";

$nome1 = "Marcelo Gattermann";

echo "<br>" . strtolower($nome1);
echo "<br><br> UPPER case <br>";

echo "<br>" . strtoupper($nome1);

//----------------------------------------------------------
//Função escolher alguns caracteres
echo "<br><br> Escolher algumas strings <br>";

$nome2 = "Gattermann";

echo "<br>" . $nome2;
echo "<br>" . substr($nome2, 1, 5);
echo "<br>" . substr($nome2, -5, 3);

//----------------------------------------------------------
// Função recuperar alguns caracteres
echo "<br><br> Procurar algo na string <br>";

echo $posicao = strpos($nome2, 'e');

//----------------------------------------------------------

echo "<br><br> Procurar algo na string <br>";
echo $nomeCompleto = "Marcelo; Passos; Gattermann <br>";
$nomeArray = explode(";", $nomeCompleto);

print_r($nomeArray);

//----------------------------------------------------------
echo "<br><br> Formatar números <br>";

$numeroFormatar = 2569.5555;
echo "<br>" . $numeroFormatar;
echo "<br>" . number_format($numeroFormatar, 2, ".", "");

















?>