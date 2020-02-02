<?php 

$conta1 = [
    'titular' => 'Diego',
    'saldo' => 2600
];

$conta2 = [
    'titular' => 'Carol',
    'saldo' => 1000
];

$conta3 = [
    'titular' => 'Dick',
    'saldo' => 10000
];


$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++)
{
    echo $contasCorrentes [$i] ['titular'] . PHP_EOL;
}