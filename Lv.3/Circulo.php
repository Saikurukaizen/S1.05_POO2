<?php
declare(strict_types=1);

class Circulo implements Shape{
    private float $r;

    public function __construct(float $r){
        $this->r = $r;
    }

    public function calcularArea(): float{
        return pi() * pow($this->r, 2);
    }
}


?>
