<?php

function __autoload($nomeClasse) {

    require_once($nomeClasse . ".php");
    var_dump($nomeClasse);
}

$minhaMoto = new Kawasaki();

$minhaMoto->acelerar(80);
?>