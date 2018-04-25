<?php

class Kawasaki extends Moto{

    private $marca;

    public function setMarca($marca) {

        $this->marca = $marca;
    }

    public function getMarca() {

        return $this->marca;
    }
}

?>