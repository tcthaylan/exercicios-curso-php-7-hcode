<?php

$minhaIdade = 20;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdoso = 65;

if ($minhaIdade < $idadeCrianca) {
    echo 'Você é uma criança';

} elseif ($minhaIdade < $idadeMaior) {
    echo 'Você é um adolescente';

} elseif ($minhaIdade < $idadeIdoso) {
    echo 'Você é um adulto';

} else {
    echo 'Você é um Idoso';
}

echo '<br>';

$texto = ($minhaIdade < $idadeIdoso) ? 'Você não é idoso' : 'Você é um idoso' ;

echo $texto;