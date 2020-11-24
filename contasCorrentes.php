<?php 

$conta1 = [
    'nome' => 'João',
    'saldo' => 1000.00
];

$conta2 = [
    'nome' => 'Pedro',
    'saldo' => 10.00
];

$conta3 = [
    'nome' => 'Maria',
    'saldo' => 100.00
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i ++) {
    echo $contasCorrentes[$i]['nome'] . "</br>";
}
