<?php
require_once('Fantasma.php');
require_once('FantasmaComestible.php');
require_once('Pildora.php');

class Packman {
    private $vidas;
    private $puntos;

    function __construct() {
        $this->vidas = 3;
        $this->puntos = 0;
    }

    function chocaContra($elemento) {
        if ($elemento instanceof Fantasma) {
            $this->vidas -= 1;
            if ($this->vidas <= 0) {
                throw new FinPartida($this->puntos);
            }
        } else if ($elemento instanceof FantasmaComestible) {
            $this->puntos += 100;
        } else if ($elemento instanceof Pildora) {
            $this->puntos += 10;
        }
    }

    function getVidas() {
        return $this->vidas;
    }

    function getPuntos() {
        return $this->puntos;
    }
}

class FinPartida extends Exception {
    private $puntos;

    function __construct($puntos) {
        $this->puntos = $puntos;
    }

    function getPuntos() {
        return $this->puntos;
    }
}
?>
