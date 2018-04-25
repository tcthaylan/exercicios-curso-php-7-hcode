<?php

$condicao = true;

while ($condicao) {
    
    $numero = rand(1, 20);

    echo $numero . " ";

    if ($numero === 3) {
        
        echo '<strong>TRÊS</strong>';
        $condicao = false;
    }
}


?>