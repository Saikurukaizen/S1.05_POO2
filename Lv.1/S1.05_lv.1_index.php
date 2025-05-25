<?php
declare(strict_types=1);

require_once('./S1.05_lv.1_animal.php');

$gos1 = new Gos('Bolo');
$gos2 = new Gos('Rolo');

$gat1 = new Gat('Monique');

$gos1->makeSound();
$gos2->makeSound();
$gat1->makeSound();
?>