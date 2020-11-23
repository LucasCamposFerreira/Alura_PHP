<?php 

$altura = 1.73;
$peso = 120.0;
$imc = $peso / $altura**2;

echo $imc . "</br>";

/*
- Abaixo de 18,5 = desnutrição
- Entre 18,5 e 24,5 = peso normal
- Entre 25,0 e 29,9 = sobrepeso
- Entre 30,0 e 39,9 = Obesidade
- Acima de 40,0 = Obesidade Mórbida

*/

if ($imc < 18.5)
    echo "Desnutrição";
elseif ($imc > 18.5 && $imc < 24.5)
    echo "Peso normal";
elseif ($imc > 25.0 && $imc < 29.9)
    echo "Sobrepeso";
elseif ($imc > 30.0 && $imc < 39.9)
    echo "Obesidade";
elseif ($imc > 40.0)
    echo"Obesidade Mórbida";