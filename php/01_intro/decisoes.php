<?php

$idade = 21;

echo "Você só pode entrar se tiver mais de 18 anos" . PHP_EOL;

if ($idade >= 18) 
    echo "Você tem $idade" . PHP_EOL . "Pode entrar.";
else 
    echo "Você só tem $idade anos";


echo PHP_EOL;
echo "Adeus!";
