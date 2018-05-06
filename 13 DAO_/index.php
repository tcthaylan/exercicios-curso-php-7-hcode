<?php

require_once('config.php');

/* Insert com método query da classe Sql
$sql = new Sql();
$sql->query("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :SENHA)", array(

    ":LOGIN" => 'suely',
    ":SENHA" => '435'
));
*/

/* Select com método select da classe Sql
$sql = new Sql();
$results = $sql->select("SELECT * FROM tb_usuarios");
print_r($results);
*/

/* Carregando usuarios pelo id
$usuario = new Usuario();
$usuario->loadById(1);
echo $usuario;
*/

/* Retorna lista de usuarios
$lista = Usuario::getList();
echo json_encode($lista);
*/

/* Procura usuarios 
$search = Usuario::search('tcthaylan');
echo json_encode($search);
*/

/* Carregando usuário usando login e senha
$login = new Usuario();
$login->login('tcthaylan', '123456');
*/

/* Inserindo novo usuario
$usuario = new Usuario();
$usuario->insert('new_usuario', 'new_senha');
*/

/* Alterando usuario
$update = new Usuario();
$update->loadById(3);
$update->update('login_alterado', 'senha_alterada');
*/

//Deletando usuario
$usuario = new Usuario();
$usuario->loadByid(2);
$usuario->delete();
?>