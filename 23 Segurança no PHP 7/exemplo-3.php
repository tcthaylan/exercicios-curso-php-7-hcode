<?php

$pasta = "pasta";
$permissao = "0775";

if (!is_dir($pasta)) {
    
    mkdir($pasta, $permissao);
}

/* Permissão de pasta
0 - sem permissão
1 - execução
2 - gravação
3 - execução/gravação
4 - leitura
5 - leitura e execução
6 - leitura e gravação
7 - permissão total

Unix

dono - grupo - outros
  7  -   7   -   5 
*/

?>