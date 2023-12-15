<?php
$saudacao = $_GET['horario'];
if ($saudacao >= 6 && $saudacao < 12) {
    echo "Bom dia";
} else if ($saudacao >= 12 && $saudacao < 18) {
    echo "Boa tarde";
} else if ($saudacao >= 18 && $saudacao <= 23) {
    echo "Boa noite";
}

?>