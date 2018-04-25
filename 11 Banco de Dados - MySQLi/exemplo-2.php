<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
    
    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios");

$data = array();

while ($row = $result->fetch_assoc()) { // verifica sem tem dados, e retorna caso exista. fetch_assoc, fetch_array
    
    array_push($data, $row);
}

echo json_encode($data);
?>