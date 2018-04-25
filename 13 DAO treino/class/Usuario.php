<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario() {

        return $this->idusuario;
    }

    public function setIdusuario($value) {

        $this->idusuario = $value;
    }

    public function getDeslogin() {

        return $this->deslogin;
    }

    public function setDeslogin($value) {

        $this->deslogin = $value;
    }

    public function getDessenha() {

        return $this->dessenha;
    }

    public function setDessenha($value) {

        $this->dessenha = $value;
    }

    public function getDtcadastro() {

        return $this->dtcadastro;
    }

    public function setDtcadastro($value) {

        $this->dtcadastro = $value;
    }

    public function loadById($id) {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(

            ':ID' => $id
        ));

        if (count($results) > 0) {
            
            $this->setData($results);
        }
    }

    public static function getList() {

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    }

    public static function search($login) {

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :LOGIN", array(

            ':LOGIN' => "%$login%"
        ));
    } 

    public function login($login, $senha) {

        $this->setDeslogin($login);
        $this->setDessenha($senha);

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :SENHA", array(

            ':LOGIN' => $this->getDeslogin(),
            ':SENHA' => $this->getDessenha()
        ));

        if (count($results) > 0) {
            
            $this->setData($results);

        } else {

            throw new Exception("Login e/ou senha inválido(s)");
        }
    }

    public function setData($results) {

        $row = $results[0];

        $this->setIdusuario($row['idusuario']);
        $this->setDeslogin($row['deslogin']);
        $this->setDessenha($row['dessenha']);
        $this->setDtcadastro(new DateTime($row['dtcadastro']));
    }

    public function delete($id) {

        $sql = new Sql();

        $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(

            ':ID' => $id
        ));
    }

    public function insert($login, $senha) {

        $sql = new Sql();

        $sql->query("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (:LOGIN, :SENHA)", array(

            ':LOGIN' => $login,
            ':SENHA' => $senha
        ));
    }

    public function update($login, $senha) {

        $this->setDeslogin($login);
        $this->setDessenha($senha);

        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :SENHA WHERE idusuario = :ID", array(

            ':ID' => $this->getIdusuario(),
            ':LOGIN' => $this->getDeslogin(),
            ':SENHA' => $this->getDessenha()
        ));
    }

    public function __toString() {

        return json_encode(array(

            'idusuario' => $this->getIdusuario(),
            'deslogin' => $this->getDeslogin(),
            'dessenha' => $this->getDessenha(),
            'dtcadastro' => $this->getDtcadastro()->format('d/m/Y H:i:s')
        ));
    }
}

?>