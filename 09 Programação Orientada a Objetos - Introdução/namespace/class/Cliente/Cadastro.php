<?php

namespace Cliente;

class Cadastro extends \Cadastro {

    public function registrarVenda() {

        echo "Registrada uma venda para " . $this->getNome();
    }
}

?>