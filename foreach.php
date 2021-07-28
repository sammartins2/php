<?php

$contasCorrentes = [
    '123.456.789-10' => [
    'titular' => "Sam", 
    'saldo' => 1000
    ],
    '987.654.321-09' => [
    'titular' => "Mãe",
    'saldo' => 2000
    ],
    '047.852.360-91' => [
    'titular' => "Parley",
    'saldo' => 10000
    ]
]; 

$contasCorrentes['000.000.200-73'] = [
    'titular' => "José",
    'saldo' => 100
]; #acrescentar outra pesssoa



foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}