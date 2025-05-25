<?php
declare(strict_types=1);

interface Shape{
    public function calcularArea(): float;
}

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

$rec1 = new Rectangulo(18, 12);
$tri1 = new Triangulo(5, 12);
echo "Área del rectángulo: " . $rec1->calcularArea() . "\n";
echo "Área del triángulo: " . $tri1->calcularArea() . "\n";
?>