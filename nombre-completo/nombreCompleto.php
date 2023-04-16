<?php

class Saludar {
    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function saludoFormal($horario) {
        if ($horario >= 5 && $horario < 13) {
            $saludo = "Buenos días";
        } elseif ($horario >= 13 && $horario < 21) {
            $saludo = "Buenas tardes";
        } else {
            $saludo = "Buenas noches";
        }
        return "$saludo $this->nombre $this->apellido";
    }

    public function saludoInformal($horario) {
        if ($horario >= 5 && $horario < 13) {
            $saludo = "buen día";
        } elseif ($horario >= 13 && $horario < 21) {
            $saludo = "buena tarde";
        } else {
            $saludo = "buena noche";
        }
        return "¡Hola $this->nombre! Que tengas $saludo";
    }
}

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$horarioFormal = $_POST["horarioFormal"];
$horarioInformal = $_POST["horarioInformal"];

$saludar = new Saludar($nombre, $apellido);

if(isset($_POST["submitFormal"])) {
    $saludoFormal = $saludar->saludoFormal($horarioFormal);
    echo $saludoFormal;
}


if(isset($_POST["submitInformal"])) {
    $saludoInformal = $saludar->saludoInformal($horarioInformal);
    echo $saludoInformal;
}

