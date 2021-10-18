<?php 

$conta1 = [
    'titular' => 'Gabriel',
    'saldo' => 1000000000
];
$conta2 = [
    'titular' => 'Marcus',
    'saldo' => 10000000
];
$conta3 = [
    'titular' => 'Matheus',
    'saldo' => 0.0001
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}

