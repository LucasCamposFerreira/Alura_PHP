<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$primeiraConta = new Conta(new Titular('123.456.789-10', 'Lucas Campos'));
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . "</br>";
echo $primeiraConta->recuperaSaldo() . "</br>";
echo $primeiraConta->recuperaCpfTitular() . "</br>";

$segundaConta = new Conta(new Titular('123.456.789-11', 'Bruno Caldas'));
echo"<pre>";
print_r($segundaConta);

echo Conta::recuperaNumDeContas();