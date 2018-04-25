<?php
////////////////////// 
//Vazio
$texto = "Olá, tudo bem?";

$inteiro = 2018;
$pontoFlutuante = 100.45;
$logico = true;

//////////////////////
//Composto
$frutas = array('0' => 'banana', 'manga', 'batata');
$objeto = new DateTime();

//var_dump($objeto);

//////////////////////
//Especial
$resourse = fopen("exemplo-3.php", "r");
$nulo = null;

////Exercícios////
/*
Question-0:
Um programador Senior PHP solicitou que você verificasse se uma variável chamada $conn já foi definida, caso ela já tenha sido definida, você deve excluir essa variável por que ela precisará ser recriada. Quais as funções do PHP você deveria utilizar para realizar esta tarefa?
*/
$conn = "desaf";

if (isset($conn)) {

    unset($conn);
}

/*
Question-1:
O PHP possui 8 tipos de dados primitivos divididos em três grupos. Quais são os tipos de dados do grupo especial:
*/

Especial
resource e nulo

?>