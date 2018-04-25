<?php

function ola(){

    $argumentos = func_get_args();//Retorna um array contendo uma lista de argumentos da função

    return $argumentos;
}
var_dump(ola("Thaylan", 33.2, 3, true));
?>

<?php
function foo()
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs<br />\n";
    if ($numargs >= 2) {
    echo "Second argument is: " . func_get_arg (1) . "<br />\n";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
    echo "Argument $i is: " . $arg_list[$i] . "<br />\n";
    }
} 

foo (1, 2, 3);
?>