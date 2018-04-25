<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Thaylan conceição");
$cad->setEmail("tc.thaylan@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();
?>