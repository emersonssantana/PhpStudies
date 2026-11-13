<?php

$nomes = ["Emerson", "Laura", "Ana", "Karyne"];

$a = 10;

foreach ($nomes as $nome) {
    echo "O nome do índice atual é $nome <br>";
    if ($nome == "Emerson") {
        echo "Opa $a <br>";
    }
}
