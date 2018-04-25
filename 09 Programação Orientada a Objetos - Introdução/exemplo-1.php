<?php

class Pessoa {

    public $nome;
    
    public function falar() {

        return 'Meu nome é ' . $this->nome;
    }
}

$thaylan = new Pessoa();

$thaylan->nome = 'Thaylan';

echo $thaylan->falar();

?>