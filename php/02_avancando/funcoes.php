<?php

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
};

function sacar(array $conta, float $valor) : array 
{
    if ($valor > $conta['saldo']) {
        exibeMensagem('Saldo Insuficiente.');
    } elseif ($valor <= 0) {
        exibeMensagem('Impossivel realizar a operação.');
    } else {
        $conta['saldo'] -= $valor;
    }

    return $conta;
}

function depositar(array $conta, float $valor) : array
{
    if ($valor <= 0) {
        exibeMensagem('Impossivel deposito negativo.');
    } else {
        $conta['saldo'] += $valor;
    }

    return $conta;
}

function titularMaiusculo(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>

        <dt><?= $conta['titular']?><?= $cpf; ?></dt>
        <dd>Saldo: <?= $conta['saldo'] ?></dd>

        <?php } ?>
    </dl>

</body>
</html>
