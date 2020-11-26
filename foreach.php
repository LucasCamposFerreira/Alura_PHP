<?php 

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'João',
        'saldo' => 1000.00
    ],
    '123.456.789-11' => [
        'titular' => 'Pedro',
        'saldo' => 10.00
    ],
    '123.456.789-12' => [
        'titular' => 'Maria',
        'saldo' => 100.00
    ]
];

foreach ($contasCorrentes as $cpf => $contas) {
    echo $cpf . "</br>";

}