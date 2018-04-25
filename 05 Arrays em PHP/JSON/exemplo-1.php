<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Thaylan',
    'sobrenome' => 'Conceição'
));

array_push($pessoas, array(
    'nome' => 'Suely',
    'sobrenome' => 'Conceição da Silva'
));

echo json_encode($pessoas); //transforma array em json

echo '<br><br>';

$json = '[{"nome":"Thaylan","sobrenome":"Concei\u00e7\u00e3o"},{"nome":"Suely","sobrenome":"Concei\u00e7\u00e3o da Silva"}]';

print_r(json_decode($json, true));//transforma json em array, sem o parâmetro true ele vira um objeto
?>