<?php

class Operando {
    protected $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function resolverEcuacion() {
        return $this->valor;
    }
}