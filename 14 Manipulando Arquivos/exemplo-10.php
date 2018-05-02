<?php

$link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse['path']);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

//parse_url - Interpreta uma URL e retorna os seus componentes
//basename — Retorna apenas a parte que corresponde ao nome do arquivo de um caminho/path
?>

<img src="<?=$basename?>" alt="">