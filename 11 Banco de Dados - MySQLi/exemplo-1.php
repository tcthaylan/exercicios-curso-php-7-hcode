<?php

$conn = new mysqli("localhost", "root", "", "dbphp7"); //("endereço", "login", "senha", "banco de dados");

if ($conn->connect_error) {
    
    echo "Error: " . $conn->connect_error; 
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (?, ?)"); // prepara a query

$login = "tcthaylan";
$pass = "123456";

$stmt->bind_param("ss", $login, $pass); // ("tipos de dados", "parametros(values)");

$stmt->execute();
?>