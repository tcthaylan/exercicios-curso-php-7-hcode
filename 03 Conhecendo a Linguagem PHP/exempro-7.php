<?php
//Funções string

$frase = "nesciunt esse fuga";

echo strtoupper($frase);

echo '<br>';

echo strtolower($frase);

echo '<br>';

echo ucfirst($frase);

echo '<br>';

echo ucwords($frase);

echo '<br>';

///////////////////////////

$empresa = "Hcode Treinamentos";

$empresa = str_replace("o", "0", $empresa);

$empresa = str_replace("e", "3", $empresa);

echo $empresa;

echo '<br>';

///////////////////////////

$texto = "Consequatur id dolorum maiores ipsum at quia.";

$q = strpos($texto, "maiores"); //retorna indice

$parte1 = substr($texto, 0, 23);

$parte2 = substr($texto, 23 + 7, strlen($texto));

$palavra = substr($texto, 23, 23 + 7);

echo $parte1 . $palavra . $parte2;

//substr();
//strpos();
//strlen();

?>