<?php

spl_autoload_register(function($nameClass) {

    $dir = 'class';
    $filename = $dir . DIRECTORY_SEPARATOR . $nameClass . '.php';

    if (file_exists($filename)) {
        
        require_once($filename);
    }
    
});

?>