<?php

spl_autoload_register(function($nomeClasse) {

    if (file_exists('classes' . DIRECTORY_SEPARATOR . $nomeClasse . '.php') === true) {
        
        require_once('classes' . DIRECTORY_SEPARATOR . $nomeClasse . '.php');
    }
});

spl_autoload_register(function($nomeClasse) {

    if (file_exists('abstratas' . DIRECTORY_SEPARATOR . $nomeClasse . '.php') === true) {
        
        require_once('abstratas' . DIRECTORY_SEPARATOR . $nomeClasse . '.php');
    }
});

$minhaMoto = new Kawasaki();
?>