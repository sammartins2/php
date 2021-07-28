<?php

$peso = 80;
$altura = 1.80;
$imc = $peso / $altura ** 2;

echo "Seu IMC é: $imc. " . PHP_EOL;

if ($imc < 18){
    echo "Abaixo";
}elseif ($imc < 25) {
    echo "Dentro";
}else {
    echo "Acima";
}

echo " do recomentado" . PHP_EOL;