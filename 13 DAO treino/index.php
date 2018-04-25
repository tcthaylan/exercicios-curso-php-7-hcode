<?php

require_once('config.php');

/* Selecionando * da tabela com a classe Sql
$sql = new Sql();
$results = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($results);
*/

/* Carregando usuario pelo id na classe e exibindo
$usuario = new Usuario();
$usuario->loadById(2);
echo $usuario;
*/

/* Carregando lista de usuarios
$lista = Usuario::getList();
echo json_encode($lista);
*/

/* Pesquisando usuario
$search = Usuario::search('tc');
echo json_encode($search);
*/

/* Fazendo login
$usuario = new Usuario();
$usuario->login('tcthaylan', '123456');
echo $usuario;
*/

/* Deletando usuario
$usuario = new Usuario();
$usuario->delete(13);
*/

/* Inserindo novo usuario
$usuario = new Usuario();
$usuario->insert('novo', 'novo');
*/

/* Atualizando usuario
$usuario = new Usuario();
$usuario->loadById(14);
$usuario->update('update_realizado', 'update');
*/

?>