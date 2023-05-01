<?php

class Multiplicar
{
    protected $op1;
    protected $op2;

    public function __construct($op1, $op2) {
        $this->op1 = $op1;
        $this->op2 = $op2;
    }

    public function resolverEcuacion() {
        return $this->op1->resolverEcuacion() * $this->op2->resolverEcuacion();
    }
}