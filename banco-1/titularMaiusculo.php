<?php 

function titularMaiúsculo(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);

    echo $conta['titular'] . "<br>";
}