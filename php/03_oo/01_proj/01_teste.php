<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$gabriel = new Titular(new Cpf('123-456-789-10'),'Gabriel');
$conta1 = new Conta($gabriel);

$laura = new Titular(new Cpf('123-789-456-84'),'Laura');
$conta2 = new Conta($laura);

$conta1->depositar(500);
$conta1->transferir(100, $conta2);

$conta2->sacar(99);

echo $conta1->recuperarSaldo() . PHP_EOL;
echo $conta2->recuperarSaldo() . PHP_EOL;

