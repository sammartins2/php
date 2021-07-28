<?php

$array = [
    1 => "a",
    '1' => "b",
    1.5 => "c",
    true => "d"

];

foreach ($array as $item){
    echo $item . PHP_EOL;
}

#esse tipo de chave vai dar errado porque o PHP vai sobreescrever o arquivo em cima, porque ele vai fazer conversão.
#Ninguem iria declarar, um tipo de chave dessa maneira.