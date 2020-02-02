<?php

$array = [  //Tipos de chaves para array's associativos e como o php se comporta com cada um
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd',
    'qualquer_coisa' => 'Teste' 
];

foreach ($array as $item) {
    echo $item .    PHP_EOL;
}