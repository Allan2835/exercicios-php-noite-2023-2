<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = "Amanda";
    $sobrenome = "Endo Murayama";

    $idade = "Idade";
    $minhaIdade = "24";

    $nomeCompleto = "$nome $sobrenome";
    $idadeCompleto = "$idade $minhaIdade";

    $nascimento = "Data de nascimento:";
    $data = "04/10/1999";

    $dataNascimento = "$nascimento $data";

    echo $nomeCompleto;

    ?>
    <br>
    <div>
        <?php
        echo $idadeCompleto;
        echo $dataNascimento
        ?>
</body>
</html>