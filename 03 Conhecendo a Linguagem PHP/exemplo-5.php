<?php
//Escopo de variável - até onde essa variável sera enxergada / até onde é sua área de atuaçãoz

$nome = "Thaylan";

teste();
teste2();

function teste(){

    global $nome;
    echo $nome;
}

function teste2(){

    echo $nome . "teste2";
}
?>