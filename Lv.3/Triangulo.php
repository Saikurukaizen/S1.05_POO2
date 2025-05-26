<?php
declare(strict_types=1);

require_once './Shape.php';

class Triangulo implements Shape{
    private float $baseTri;
    private float $alturaTri;

    public function __construct(float $baseTri, float $alturaTri){
        $this->baseTri = $baseTri;
        $this->alturaTri = $alturaTri;
    }

    public function calcularArea(): float{
        return ($this->baseTri * $this->alturaTri) / 2;
    }
}
?>