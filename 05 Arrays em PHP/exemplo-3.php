<?php

$pessoas = array();

//array_push adiciona um item em um array existente
array_push($pessoas, array(
    'nome' => 'Thaylan',
    'sobrenome' => 'Conceição'
));

array_push($pessoas, array(
    'nome' => 'Suely',
    'sobrenome' => 'Conceição da silva' 
));

array_push($pessoas, array(
    'nome' => 'Antonio',
    'sobrenome' => 'Raul da Conceição' 
));

print_r($pessoas[2]['sobrenome']);

?>