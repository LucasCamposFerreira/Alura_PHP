<?php 

$Conta = $_POST["Conta"];
$deposito = $_POST["deposito"];

require("bancoSaque.php");

$contasCorrentes[$Conta]['saldo'] += $deposito;

print_r($contasCorrentes[$Conta]);
