<?php
declare(strict_types=1);

require_once './Shape.php';
require_once './Triangulo.php';
require_once './Rectangulo.php';
require_once './Circulo.php';

$rec1 = new Rectangulo(18, 12);
$tri1 = new Triangulo(5, 12);
$cir1 = new Circulo(5);

foreach ($figuras as $figura) {
    echo "Área: " . $figura->calcularArea() . PHP_EOL;
}
