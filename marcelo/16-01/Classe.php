<?php
class Classe
{
    public static function somar($valor1, $valor2, $valor3)
    {
        $result = $valor1 + $valor2 + $valor3;
        return $result;
    }
    public static function media($valor1, $valor2, $valor3)
    {
        $media = self::somar($valor1, $valor2, $valor3);
        $media2 = $media / 3;
        return $media2;
    }

    public static function celsius($celsius)
    {
        $result = ($celsius * 9 / 5) + 32;
        return $result;
    }

    public static function fahrenheit($f)
    {
        $result = 5 / 9 * ($f - 32);
        return $result;
    }
}
?>