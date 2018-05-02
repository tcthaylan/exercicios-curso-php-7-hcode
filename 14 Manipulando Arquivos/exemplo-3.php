<?php

$file = fopen("log.txt", "a+");

fwrite($file, date('d/m/Y H:i:s') . "\r\n");

fclose($file);

//$file tipo resource, faz referencia a um arquivo externo
//fopen -  Abre um arquivo ou URL
?>