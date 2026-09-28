<?php

$carro = [
    'modelo' => 'Ferrari',
    'cor' => 'Vermelho',
    'preco' => '3.000.000.000',
    'rodas' => 4,
    'teto_solar' => true,
    'blindado' => false
];

print_r($carro);

$modelo = $carro['modelo'];
$preco = $carro['preco'];
echo "<br>";
echo "O modelo do carro é uma $modelo e o preço é $preco!";
