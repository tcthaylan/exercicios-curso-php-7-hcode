<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

imagepng($image);

imagedestroy($image);

//imagecreate — Cria uma nova imagem baseada em paleta - resource imagecreate ( int $width , int $height)
//imagecolorallocate — Aloca uma cor para uma imagem
//imagestring - Desenha uma string nas dadas coordenadas.
//imagepng — Emite uma imagem PNG para o navegador ou arquivo
//imagedestroy — Destrói uma imagem

?>