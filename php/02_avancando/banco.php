<?php 

require_once 'funcoes.php';

# Array associativa
$contasCorrentes = [
    '135.684.846-3' => [
        'titular' => 'Gabriel',
        'saldo' => 1000000000
    ],
    '036.516.513-5' => [
        'titular' => 'Marcus',
        'saldo' => 500
    ],
    '165.469.846-4' => [
        'titular' => 'Matheus',
        'saldo' => 0.0001
    ]
];

# Adicionando Conta
$contasCorrentes['135.268.684-0'] = [
    'titular' => 'Craudia',
    'saldo' => 0
];

# Sacar
$contasCorrentes['036.516.513-5'] = sacar($contasCorrentes['036.516.513-5'], 40);

# Depositar
$contasCorrentes['165.469.846-4'] = depositar($contasCorrentes['165.469.846-4'], 60);

# Passar para Maiúsculo
titularMaiusculo($contasCorrentes['165.469.846-4']);

# Excluir conta
unset($contasCorrentes['135.684.846-3']);


# Mostrando valores
echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
echo "</ul>";