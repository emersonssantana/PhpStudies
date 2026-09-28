<?php

$pessoa = [
    'nome' => 'Kira',
    'idade' => 30,
    'peso' => 74,
    'altura' => 1.73
];

$nome = $pessoa['nome'];
//$idade = $pessoa['idade'];
$peso = $pessoa['peso'];
$altura = $pessoa['altura'];

if ($pessoa['idade'] >= 18) {
    echo "$nome tem {$pessoa['idade']} anos, é maior de idade! Seu peso é de $peso kg e sua altura é de $altura cm.";
} else {
    echo "$nome tem {$pessoa['idade']} anos, é menor de idade! Seu peso é de $peso kg e sua altura é de $altura cm.";
}

echo "<br>";
print_r($pessoa);
