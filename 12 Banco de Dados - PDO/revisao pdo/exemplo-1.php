<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    
    foreach ($row as $key => $value) {
        
        echo "<strong>$key: $value</strong><br>"; 
    }
    
    echo '========================================<br>';
}

?>