<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Carro implements Veiculo {

    public function acelerar($velocidade) {

        echo "Carro acelerou para " . $velocidade . " km/h";
    }

    public function frenar($velocidade) {

        echo "Carro freiou para " . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha) {

        echo "Passou para " . $marcha . " marcha";
    }
}

$objeto  = new Carro();

$objeto->acelerar(20);

?>