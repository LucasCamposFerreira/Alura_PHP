<?php 
/*(tipo string, por exemplo LMS-2312) para um carro.
O carro também é um array associativo que possui uma marca
(por exemplo 'marca' => 'VW')
e o modelo (por exemplo 'modelo' => 'Golf').
*/

// $dono = 

$carro = [
    'modelo' =>['Golf'],
    'marca' =>['Volkswagen'],
    'dono' =>['carro do Joãozinho']
];

foreach ($carro as $caracteristicas=>$dados) {
    echo $dados[0] . "</br>";
}

