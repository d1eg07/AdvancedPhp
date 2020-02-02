<?php

'123.456.789-10' => [
    'titular' => 'Diego',
    'saldo' => 2600
],

'123.456.789-11' => [
    'titular' => 'Carol',
    'saldo' => 1000
],
'123.256.789-12' => [
'titular' => 'Dick',
'saldo' => 10000
]
];

$contasCorrentes[] = [
'titular' => 'Bruce',
'saldo' => 2000
];

$contasCorrentes[] = [
'titular' => 'Bruce 2',
'saldo' => 2002
];


foreach ($contasCorrentes as $cpf => $conta) {
echo $cpf . " " . $conta['titular'] . PHP_EOL;
}