<?php

function  verificaNumero($num)
{

    if ($num % 2  === 0) {
        echo "$num é um número par <br>";
    } else {
        echo "$num é um número ímpar <br>";
    }
}

verificaNumero(5);
verificaNumero(2);
verificaNumero(0);
verificaNumero(-3);
