<?php
class Classe
{
    public static function media($valor1, $valor2, $valor3)
    {
        $media = somar($valor1, $valor2, $valor3);
        $media2 = $media / 3;
        return $media2;
    }
}
?>