<?php

$vel = 41;
$velMax = 40;

if ($vel < $velMax) {
    echo "Você está em uma velocidade segura <br>";
} else if ($vel == $velMax) {
    echo "Você está na velocidade máxima permitida, tome cuidado <br>";
} else {
    echo "Você será multado por estar acima da velocidade permitida <br>";
}
