<?php

echo "Texto com aspas duplas<br>";
echo 'Texto com aspas simples<br>';

$str = "Kira";
$num = 20;

if (is_string($str)) {
    echo "$str é uma string!<br>";
}

echo "Olá. Eu me chamo $str e tenho $num anos!";
