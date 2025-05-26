<?php
declare(strict_types=1);

require_once './Shape.php';
require_once './Triangulo.php';
require_once './Rectangulo.php';

$tri1 = new Triangulo(5, 12);
$rec1 = new Rectangulo(18, 12);

echo "Área del triángulo: " . $tri1->calcularArea() . "\n" . PHP_EOL;
echo "Área del rectángulo: " . $rec1->calcularArea() . "\n" . PHP_EOL;
