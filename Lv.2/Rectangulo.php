<?php
declare(strict_types=1);

require_once './Shape.php';

class Rectangulo extends Shape{

    public function calcularArea(): float{
        return $this->base * $this->altura;
    }
}
?>
