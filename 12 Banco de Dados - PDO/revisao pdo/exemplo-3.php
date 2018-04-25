<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :SENHA WHERE idusuario = :ID");

$login = 'login_alterado';
$senha = 'nova_senha';
$id = '11';

$stmt->bindParam(':LOGIN', $login);
$stmt->bindParam(':SENHA', $senha);
$stmt->bindParam(':ID', $id);

$stmt->execute();

?>