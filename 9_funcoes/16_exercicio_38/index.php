<?php

$lista = ["Arroz", "Feijão", "Óleo", "Macarrão", "Trigo"];

function listaString($arr)
{

    $str = "Você levou esses ítens do mercado: ";

    for ($i = 0; $i < count($arr); $i++) {

        if ($i + 1  == count($arr)) {
            $str .= "$arr[$i]. ";
        } else {
            $str .= "$arr[$i], ";
        }
    }

    return $str;
}

echo listaString($lista);
