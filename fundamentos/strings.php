<?php 

$idade = 14;
$liberado = "Você tem 18 anos, pode entrar";
$naoLiberado ="Você não tem 18 anos, não pode entrar";

echo "Hello world,";

echo "<br />";

echo " I´ve $idade";

echo "Você pode entrar se tiver mais de 18 anos.\n";

if ($idade >18) {
    echo $liberado;
}
else 
    echo $naoLiberado;