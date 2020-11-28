<?php 

$dias = $_POST['dias'];
$idade = $_POST['idade'];

if ($idade < 5)
    echo("crianças menores de 5 anos não pagam estadia");

elseif ($dias <= 7) {
    echo("Você pagará R$ ");
    echo($dias * 15);
    echo(" pela estadia de $dias dias");
}
elseif ($dias <= 14) {
    echo("Você pagará R$ ");
    echo($dias * 14);
    echo(" pela estadia de $dias dias");

}
 elseif ($dias >=15) {
    echo("Você pagará R$ ");
    echo($dias * 13);
    echo(" pela estadia de $dias dias");
 }     




