<?php

class Usuario extends Sql {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    //Idusuario
    public function getIdusuario() {

        return $this->idusuario;
    }

    public function setIdusuario($value) {

        $this->idusuario = $value;
    }

    //Deslogin
    public function getDeslogin() {

        return $this->deslogin;
    }

    public function setDeslogin($value) {

        $this->deslogin = $value;
    }
    
    //Dessenha
    public function getDessenha() {

        return $this->dessenha;
    }

    public function setDessenha($value) {

        $this->dessenha = $value;
    }

    //Dtcadastro
    public function getDtcadastro() {

        return $this->dtcadastro;
    }

    public function setDtcadastro($value) {

        $this->dtcadastro = $value;
    }

    public function loadById($id) {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(

            ":ID" => $id
        ));

        
        if (count($results) > 0) {
            
            $row = $results[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro($row['dtcadastro']);
        }
    }

    public static function getList() {

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    }

    public static function search($login) {

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH", array(

            ":SEARCH" => "%$login%"
        ));
    }

    public function login($login, $password) {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(

            "LOGIN"     => $login,
            "PASSWORD"  => $password
        ));

        if (count($results) > 0) {
            
            $row = $results[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro($row['dtcadastro']);

            echo "Login realizado com sucesso";

        } else {

            throw new Exception("Login e/ou senha inválido(s)!");
            
        }
    }

    public function insert($login, $password) {

        $sql = new Sql();

        $sql->query("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)", array(

            ":LOGIN"    => $login,
            ":PASSWORD" => $password
        ));
    }

    public function update($login, $password) {

        $this->setDeslogin($login);
        $this->setDessenha($password);
        
        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(

            ":ID"       => $this->getIdusuario(),
            ":LOGIN"    => $this->getDeslogin(),
            ":PASSWORD" => $this->getDessenha()
        ));
    }

    public function delete() {

        $sql = new Sql();

        $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(

            ":ID" => $this->getIdusuario()
        )); 
    }

    public function __toString() {

        return json_encode(array(

            "idusuario"     => $this->getIdusuario(),
            "deslogin"      => $this->getDeslogin(),
            "dessenha"      => $this->getDessenha(),
            "dtcadastro"    => $this->getDtcadastro()
        ));
    }
}

?>