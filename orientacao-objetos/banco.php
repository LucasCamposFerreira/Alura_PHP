<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias');
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() .'<br>';
echo $primeiraConta->recuperaCpfTitular() .'<br>';
echo $primeiraConta->recuperaSaldo() .'<br>';

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia');
$segundaConta = new Conta($patricia);
echo'<prev>';
print_r($segundaConta);

$outra = new Conta(new Titular(new CPF('123.456.789-13'), 'Abcdefg'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();       