<?php

class Papel {
    private $nombreJugador;

    public function __construct($nombreJugador) {
        $this->nombreJugador = $nombreJugador;
    }

    public function competirContra($otro) {
        return $otro->teCompitePapel($this);
    }

    public function teCompiteTijera($otro) {
        return $otro;
    }

    public function teCompitePiedra($otro) {
        return $this;
    }

    public function teCompitePapel($otro) {
        return new Empate();
    }

    public function ganador() {
        return $this->nombreJugador;
    }
}

