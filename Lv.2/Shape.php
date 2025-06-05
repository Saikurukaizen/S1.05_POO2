<?php
declare(strict_types=1);

abstract class Shape{

    protected float $base;
    protected float $altura;

    public function __construct(float $base, float $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    abstract function calcularArea(): float;
}

?>
