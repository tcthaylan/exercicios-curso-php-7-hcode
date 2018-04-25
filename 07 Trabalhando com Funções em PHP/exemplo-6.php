<?php

function soma(int ...$valores):float{//tipo return { // ... pega todos os parâmetro e transforma em um array, semelhante ao func_get_args();

    var_dump($valores);
    echo '<br>';
    return array_sum($valores);
}


var_dump(soma("3", "5"));

?>