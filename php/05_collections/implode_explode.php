<?php

$nomes = "Gabriel, Duda, Vinicius";

$nomes_separados = explode(",", $nomes);

foreach ($nomes_separados as $nome) {
    echo $nome . PHP_EOL;
}

$nomes_juntos = implode(",", $nomes_separados);

var_dump($nomes_separados);
var_dump($nomes_juntos);
