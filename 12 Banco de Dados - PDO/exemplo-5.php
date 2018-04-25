<?php
//TRANSAÇÃO
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = '1';

$stmt->execute(array($id));//outra maneira de referênciar os parâmetros.

//$conn->rollback();
$conn->commit();
?>