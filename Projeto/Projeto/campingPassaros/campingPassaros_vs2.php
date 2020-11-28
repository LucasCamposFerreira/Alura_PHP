<?php 

$dias = $_POST['dias'];
$idade = $_POST['idade'];
$pessoas = $_POST['nPessoas'];


if ($idade < 15) {
    echo("Você pagará R$ ");
    echo($dias * 12 * $pessoas);
    echo(" pela estadia de $dias dias");
}
else {
    echo("Você pagará R$ ");
    echo($dias * 14 * $pessoas);
    echo(" pela estadia de $dias dias");
}
