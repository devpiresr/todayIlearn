<?php

class Calculadora
{
    public function calculaMedia(array $notas): float
    {
        $quantidadeDeNotas = sizeof($notas);
        $soma = 0;

        for ($i = 0; $i < $quantidadeDeNotas; $i++) {
        $soma = $soma + $notas[$i];
        }

        return $soma / $quantidadeDeNotas;

    }
}
