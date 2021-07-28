<?php

$conta1 = [
    'titular' => "Sam", 
    'saldo' => 1000
];

$conta2 = [
    'titular' => "Mãe",
    'saldo' => 2000
];

$conta3 = [
    'titular' => "Parley",
    'saldo' => 10000
];

$contasCorrentes = [$conta1,$conta2,$conta3]; 

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i] ['titular'] . PHP_EOL; 
}