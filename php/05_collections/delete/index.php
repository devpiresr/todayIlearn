<?php

namespace Alura\Delete;

require_once "autoload.php";

use ArrayUtils;


$correntistasECompras = [
    "Giovanna",
    "João",
    "Augusto",
    42,
    "Gabriel",
    32,
    "Jagunço"
];

ArrayUtils::remove("Giovana", $correntistasECompras);

var_dump($correntistasECompras);

