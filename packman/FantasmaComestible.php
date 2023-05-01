<?php

class FantasmaComestible
{
    private $tiempoRestante;

    public function __construct($tiempoRestante) {
        $this->tiempoRestante = $tiempoRestante;
    }

    public function getTiempoRestante() {
        return $this->tiempoRestante;
    }
}