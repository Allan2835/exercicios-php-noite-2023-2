<?php

$result = $_GET["result"];


if ($result <= 12) {
    echo "Bom dia!";
} else if ($result > 12 && $result <= 18) {
    echo "Boa tarde!";
} else if ($result > 18 && $result <= 24) {
    echo "Boa noite!";
} else {
    echo "Horário inválido";
}

?>