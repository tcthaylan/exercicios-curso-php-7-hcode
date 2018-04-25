<?php

class Documento {

    private $numero;

    public function getNumero(){

        return $this->numero;
    }

    public function setNumero($n) {

        $this->numero = $n;
    }
}

class Cpf extends Documento {

    public validar():bool {

        $numeroCPF = $this->getNumero();
        //Aqui vai a validação do cpf
        return true;
    }
}

$documento = new Cpf();

$documento->setNumero('45898798838');
$documento->validar();
?>