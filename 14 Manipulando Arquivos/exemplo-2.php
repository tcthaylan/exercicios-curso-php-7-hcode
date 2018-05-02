<?php

$images = scandir('images');

//var_dump($images);

$data = array();

foreach ($images as $img) {
    
    if (!in_array($img, array('.', ".."))) {
        
        $filename = 'images' . DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($filename);
        $info['size'] = filesize($filename);
        $info['modified'] = date("d/m/Y H:i:s", filemtime($filename));
        $info['url'] = 'http://localhost/PHP%207%20Udemy/14%20Manipulando%20Arquivos/' . str_replace('\\', '/', $filename);

        array_push($data, $info);
    }
}

echo json_encode($data);

//scandir - Retorna um array de arquivos e diretórios dentro do diretório
//in_array - Checa se um valor existe em um array
//pathinfo — Retorna um array com informações sobre um caminho de arquivo
//filesize - Retorna o tamanho do arquivo em bytes
//filemtime — Obtém o tempo de modificação do arquivo
?>