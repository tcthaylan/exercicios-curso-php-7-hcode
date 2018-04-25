<?php

class Pessoa {

    public $nome = 'Ramus Lerdorf';
    protected $idade = 48
    private $senha = '123456';
    
    public function exibirDados() {

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$objeto = new Pessoa();

?>