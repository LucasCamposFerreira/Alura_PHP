<?php 

$dias = $_POST['dias'];
$idade = $_POST['idade'];

if ($idade < 15) {
    echo("Você pagará R$ ");
    echo($dias * 12);
    echo(" pela estadia de $dias dias");
}
else {
    echo("Você pagará R$ ");
    echo($dias * 14);
    echo(" pela estadia de $dias dias");
}
