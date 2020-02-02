<?php

$contasCorrentes = [   //Define um Array associativo com a chave sendo o cpf e dentro dela os dados da conta
    12345678910 => [
        'titular' => 'Diego',
        'saldo' => 2600
    ],
    12345678911 => [
        'titular' => 'Carol',
        'saldo' => 1000
    ],
    12325678912 => [
    'titular' => 'Dick',
    'saldo' => 10000
    ]
];

foreach ($contasCorrentes as $cpf => $conta) { //foreach de $contasCorrentes indo na chave que é o cpf da conta
    echo $conta['titular'] . PHP_EOL;
}