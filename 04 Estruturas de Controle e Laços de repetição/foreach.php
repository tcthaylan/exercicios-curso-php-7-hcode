<?php

$meses = array(
    'Janeiro', 'Fevereiro', 'Março', 'Abril', 
    'Maio', 'Junho', 'Julho', 'Agosto', 
    'Setembro', 'Outubro', 'Novembro', 'Dezembro'
);


foreach ($meses as $index => $mes) {

    echo 'Indice: 0'.($index + 1).'<br>';
    echo 'Mês: '.$mes.'<br><br>';
}
//foreach ($array as $indice => $apelidoSingular)
?>