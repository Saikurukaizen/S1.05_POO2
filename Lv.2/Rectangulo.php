<?php
declare(strict_types=1);

require_once './Shape.php';

class Rectangulo implements Shape{
    private float $baseRec;
    private float $alturaRec;

    public function __construct(float $baseRec, float $alturaRec){
        $this->baseRec = $baseRec;
        $this->alturaRec = $alturaRec;
    }

    public function calcularArea(): float{
        return $this->baseRec * $this->alturaRec;
    }
}
?>