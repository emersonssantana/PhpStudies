<?php

function velocidadeMaxima($vel)
{
    if (is_int($vel)) {
        echo "O carro antinge uma velocidade máxima de $vel km/h <br>";
    } else {
        echo "Por favor passe um número inteiro <br>";
    }
}

velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(400);

// Não pode executar função sem parâmentro que exige parâmentro
// velocidadeMaxima();

echo "Teste continuando <br>";

$velocidade = 125;
velocidadeMaxima($velocidade);
velocidadeMaxima("teste");

// Mais parâmetros 
function descreverAnimal($nome, $raca)
{
    echo "O $nome é da raça $raca <br>";
}

descreverAnimal("Bethoven", "vira-lata");
descreverAnimal("Bob", "pitbull");
