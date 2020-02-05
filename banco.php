<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];



if (500> $contasCorrentes['123.456.789-10']['saldo']) {  //Validação para se o saldo é menor do que a valor a sacar
    echo "Você não pode sacar este valor" . PHP_EOL;
} else 
    $contasCorrentes['123.456.789-11']['saldo'] -= 500; //Acessar o saldo e subtrair determinado valor

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}
