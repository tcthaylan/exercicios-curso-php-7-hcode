<?php

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c) {

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct() {

        echo 'destruido';
    }


    public function __toString() {

        return $this->logradouro . ", " . $this->numero . ", " . $this->cidade;
    }
}

$meuEndereco = new Endereco('Rua flor de setembro', '123', 'Santos');

echo $meuEndereco;

?>