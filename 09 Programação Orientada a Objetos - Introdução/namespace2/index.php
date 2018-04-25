<?php

require_once('config.php');

use Cliente\Cadastro;

$cad = new Cadastro();

//$cad->setNome('Thaylan Conceição');
//$cad->setEmail('tc.thaylan@gmail.com');
//$cad->setSenha('123456');

//echo $cad;

$cad->cadastrarCliente();
?>