<?php

abstract class Animal {

    public function mover() {

        return "Anda";
    }

    public function comunica() {

        return "Som";
    }
}

class Cachorro extends Animal {

    public function comunica() {

        return "Late";
    }
}

class Gato extends Animal {

    public function comunica() {

        return "Mia";
    }
}

class Passaro extends Animal {

    public function mover() {

        return "Voa" . " e " . parent::mover();
    }

    public function comunica() {

        return "Pia";
    }
}

$tobby = new Cachorro();
echo $tobby->comunica() . "<br>";

$garfield = new Gato();
echo $garfield->comunica() . "<br>";

$picapau = new Passaro();
echo $picapau->mover() . "<br>";
echo $picapau->comunica() . "<br>";


?>