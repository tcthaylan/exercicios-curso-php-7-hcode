<?php
$nome = "Thaylan";
$sobrenome = "Conceição";
$nomeCompleto = $nome . " " . $sobrenome;

//unset($nomeCompleto);

if (isset($nomeCompleto)) {
    echo $nomeCompleto;
}

//exit;

echo 'Está mensagem não irá aparecer';

/*
unset - deixa a variável vazia
isset - retorna false caso a variável seja null
exit - finaliza a execução do código
*/
?>