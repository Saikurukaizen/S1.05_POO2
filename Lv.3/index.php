<?php
declare(strict_types=1);

require_once './Shape.php';
require_once './Triangulo.php';
require_once './Rectangulo.php';
require_once './Circulo.php';

$rec1 = new Rectangulo(18, 12);
$tri1 = new Triangulo(5, 12);
$cir1 = new Circulo(5);

echo "Área del rectángulo: " . $rec1->calcularArea() . "\n" . PHP_EOL;
echo "Área del triángulo: " . $tri1->calcularArea() . "\n" . PHP_EOL;
echo "Área del círculo: " . $cir1->calcularArea() . "\n" . PHP_EOL;