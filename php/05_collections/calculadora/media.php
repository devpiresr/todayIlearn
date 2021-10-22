<?php

require_once 'Calculadora.php';

$notas = [10, 10, 10, 10];

$calculadora = new Calculadora($notas);
echo $calculadora->calculaMedia($notas);

