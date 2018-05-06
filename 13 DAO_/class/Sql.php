<?php

class Sql extends PDO {

    private $conn;

    public function __construct() {

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
    }

    public function query($rawQuery, $params = array()) {

        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;
    }

    public function setParams($stmt, $params) {

        foreach ($params as $key => $value) {
            
            $this->setParam($stmt, $key, $value);
        }
    }

    public function setParam($stmt, $key, $value) {

        $stmt->bindParam($key, $value);
    }

    public function select($rawQuery, $params = array()):array
    {
        $stmt = $this->query($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>