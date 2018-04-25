<?php

$name = 'images';

if (!is_dir($name)) {
    
    mkdir($name);
    echo "Diretório $name criado com sucesso";

} else {

    rmdir($name);
    echo "Diretório $name removido!";
}

//is_dir - true caso seja um diretório
//mkdir - cria um diretório
//rmdir - remove um diretório
?>