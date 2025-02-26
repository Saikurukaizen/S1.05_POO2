<?php

interface Shape{
    public function calcularArea();
}

class Triangulo implements Shape{
    private $base;
    private $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        return ($this->base * $this->altura) / 2;
    }
}

class Rectangle implements Shape{
    private $side1;
    private $side2;

    public function __construct($side1, $side2){
        $this->side1 = $side1;
        $this->side2 = $side2;
    }

    public function calcularArea(){
        return $this->side1 * $this->side2;
    }
}

$rectangulo = new Rectangle(7, 5);
echo $rectangulo->calcularArea();
$triangulo = new Triangulo(3, 7);
echo $triangulo->calcularArea();

