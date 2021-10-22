<?php

require_once '../delete/ArrayUtils.php';


$correntistas = [
    'Giovanni',
    'João',
    'Maria',
    'Luis',
    'Luisa que mora no Canadá',
    'Rafael'
];

$saldos = [
    1565,
    5651,
    1561,
    1325,
    6897,
    5465,
];

$juntos = array_combine($correntistas, $saldos);

var_dump($juntos);

$maiorSaldo = ArrayUtils::saldoMaior(2000, $juntos);

var_dump($maiorSaldo);

# ADICIONA SALDO AO FINAL
# $juntos = array_merge($correntistas, $saldos);



/*
$correntistas = [
    'Giovanni',
    'João',
    'Maria',
    'Luis',
    'Luisa que mora no Canadá',
    'Rafael'
];

$correntistasNaoPagantes = [
    'Luis',
    'Luisa',
    'Rafael'
];

$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);

var_dump($correntistasPagantes);
**/;