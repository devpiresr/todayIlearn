<?php 

$contasCorrentes = [
    '135.684.846-3' => [
        'titular' => 'Gabriel',
        'saldo' => 1000000000
    ],
    '036.516.513-5' => [
        'titular' => 'Marcus',
        'saldo' => 10000000
    ],
    '165.469.846-4' => [
        'titular' => 'Matheus',
        'saldo' => 0.0001
    ]
];

$contasCorrentes['135.268.684-0'] = [
    'titular' => 'Craudia',
    'saldo' => 0
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . ' ' . $conta['titular'] . PHP_EOL;
}