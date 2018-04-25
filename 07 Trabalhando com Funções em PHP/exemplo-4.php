<?php

$numero = 10;

function alteraNumero(&$num){ //& = passagem de parâmetro por referência, ou seja, o que acontece na função muda o                                 valor na variável.

    $num = 50;
    return $num;
}

echo alteraNumero($numero) . "<br>";

echo $numero;

?>