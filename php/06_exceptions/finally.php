<?php

function a(): int
{
    try {
        echo "Codigo";
        return 0;
    } catch (\Throwable $th) {
        echo "Codigo Catch";
        return 1;
    } finally {
        echo "Final da Funcao.";
    }
}

echo a();
