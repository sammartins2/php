<?php

$carros = [
    'LMS-2312' => [
    'Marca' => "Volkswagen",
    'Modelo' => "Pollo"
    ],

    'JEG-6181' => [
    'Marca' => "Audi",
    'Modelo' => "A3"    
    ],

    'BMK-3200' => [
    'Marca' => "Toyota",
    'Modelo' => "Corolla"
    ],

    'BJH-7845' => [
    'Marca' => "Fiat",
    'Modelo' => "Argo"
    ],

];

$carros 

    ['JID-7854'] = [
    'Marca' => "BMW",
    'Modelo' => "X6"
    ];
$carros
    ['JNJ-4513'] = [
    'Marca' => "Chevrolet",
    'Modelo' => "Onix"

];

foreach ($carros as $placa => $carro){
    echo $placa . ': ' . $carro['Marca'] . ' - ' . $carro['Modelo'] . PHP_EOL;
}
