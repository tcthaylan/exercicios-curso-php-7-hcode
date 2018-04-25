<?php

$pessoa = array(
    'nome' => 'Thaylan',
    'idade' => 15
);

foreach ($pessoa as &$value) {
        
    if (gettype($value) == 'integer') {
         $value += 5;
    }

    echo $value . "<br>";
}

print_r($pessoa);

?>