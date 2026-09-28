<?php

class pessoa
{
    function falar()
    {
        echo "Olá pessoa!";
    }
}

$emerson = new pessoa();

$emerson->nome = "Emerson";

echo $emerson->nome;

echo "<br>";

$emerson->falar();
