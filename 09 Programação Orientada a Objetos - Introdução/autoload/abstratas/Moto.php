<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Moto implements Veiculo {

    public function acelerar($velocidade) {

        echo "Moto acelerou para " . $velocidade . " km/h";
    }

    public function frenar($velocidade) {

        echo "Moto freiou para " . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha) {

        echo "Passou para " . $marcha . " marcha";
    }
}

?>