<?php

if (is_int(5)) { // True
    echo "É um inteiro <br>";
}

if (is_int("Não é um inteiro")) { // False
    echo "É um inteiro 2 <br>";
}

$a = 10;

if (is_int($a)) { // True
    echo "É um inteiro 3 <br>";
}
