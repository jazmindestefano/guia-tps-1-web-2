<?php

class Piedra {
    private $nombreJugador;

    public function __construct($nombreJugador) {
        $this->nombreJugador = $nombreJugador;
    }

    public function competirContra($otro) {
        return $otro->teCompitePiedra($this);
    }

    public function teCompiteTijera($otro) {
        return $this;
    }

    public function teCompitePiedra($otro) {
        return new Empate();
    }

    public function teCompitePapel($otro) {
        return $otro;
    }

    public function ganador() {
        return $this->nombreJugador;
    }
}