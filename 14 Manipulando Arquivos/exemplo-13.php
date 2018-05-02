<?php

$data = array(
    "empresa" => "Hcode Treinamentos"
);

setcookie("NOME_DO_COOKIE", json_encode($data), 3600);

echo 'ok!';
?>