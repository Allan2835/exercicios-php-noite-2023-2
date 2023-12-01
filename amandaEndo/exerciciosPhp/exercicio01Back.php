<?php
$hora = $_GET['hora'];
if($hora >= 6 && $hora <= 12) {
    echo 'Bom dia!';   
} else if ($hora > 12 && $hora < 18) {
    echo 'Boa tarde!'; 
} else {
  echo 'Boa noite';
}
?>