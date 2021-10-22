<?php

class ArrayUtils
{
    public static function remove(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true);
        
        if (!is_int($posicao)){
            echo "Valor não encontrado." . PHP_EOL;
            return;
        }

        unset($array[$posicao]);
    }

    public static function saldoMaior(int $saldo, array $array): array
    {
        $maiores = [];
        foreach ($array as $chave => $valor) {
            if ($valor > $saldo) {
            $maiores[] = $chave;
            }
        }

        return $maiores;
    }
}