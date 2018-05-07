<?php

function trataNome($name) {

    if (!$name) {
        
        throw new Exception("Nenhum nome foi informado!");
    }

    echo ucfirst($name) . "<br>";
}


try {

    trataNome('thaylan');
    trataNome('');

} catch (Exception $e) {

    echo $e->getMessage() . "<br>"; 

} finally {

    echo 'Executou o bloco try!';
}

?>