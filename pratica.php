<?php
//Insert

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

json_encode($results);

var_dump($results);

?>