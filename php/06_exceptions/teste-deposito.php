<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, Titular};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.123.123-01'), 'Gabriel',
            new Endereco("Jatoba", "Curicica", "Atapolis", "52")));


try {
    $contaCorrente->deposita(-100);
} catch (\InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo.";
}

$contaCorrente->recuperaSaldo();