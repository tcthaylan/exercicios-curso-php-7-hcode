<?php

function __autoload($nomeClasse) {

    require_once("classes" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
}

$minhaMoto = new Kawasaki();

$minhaMoto->setMarca("z300");
echo $minhaMoto->getMarca();
?>