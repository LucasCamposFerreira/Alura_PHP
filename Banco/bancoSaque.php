<?php 

$conta = $_POST["conta"];
$saque = $_POST["saque"];

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
    ],
    '123.456.879-12' => [
        'titular' => 'Kátia',
        'saldo' => 1500.00
    ]
];

if($contasCorrentes[$conta]['saldo'] >= $saque) {
    echo "Sua transação foi efetuada com sucesso!";
}
else {
    echo "Saldo insuficiente, saldo disponível:$saque";   
}

