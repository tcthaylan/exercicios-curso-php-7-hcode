<?php

function incluirClasses($nomeClasse){

    if (file_exists($nomeClasse . ".php") === true) {

        require_once($nomeClasse . ".php");
    }
}

spl_autoload_register("incluirClasses");

spl_autoload_register(function($nomeClasse) {

    if (file_exists('classes' . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true) {
        
        require_once('classes' . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }
});

$minhaMoto = new Kawasaki();

$minhaMoto->acelerar(80);
?>