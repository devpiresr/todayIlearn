<?php

$peso = 67;
$altura = 1.76;

$imc = $peso / ($altura * $altura);

echo "Seu imc é de $imc" . PHP_EOL;

if ($imc <= 18.5) {
    echo "Você está magro!";
} else if ($imc <= 25){
    echo "Você está saudável!";
} else if ($imc <= 30) {
    echo "Você está com sobre peso!";
} else if ($imc <= 35) {
    echo "Você está com obesidade grau 1!";
} else {
    echo "Você está com obesidade grau 2!";
} 