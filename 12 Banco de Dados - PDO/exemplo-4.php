<?php
//DELETE
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE deslogin = :USUARIO");

$usuario = 'mudou';

$stmt->bindParam(":USUARIO", $usuario);

$stmt->execute();

?>