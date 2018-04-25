<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (?, ?)");

$login = 'jose34';
$senha = '3223';

//$stmt->bindParam(':DESLOGIN', $login);
//$stmt->bindParam(':DESSENHA', $senha);

$stmt->execute(array(
    $login,
    $senha
));

?>