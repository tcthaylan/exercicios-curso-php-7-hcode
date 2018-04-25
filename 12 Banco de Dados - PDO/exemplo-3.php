<?php
//UPDATE PDO
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :USUARIO, dessenha = :SENHA WHERE idusuario = :ID");

$usuario = "mudou";
$senha = "nova-senha";
$id = "8";

$stmt->bindParam(":USUARIO", $usuario);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();

?>