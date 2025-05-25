<?php
declare(strict_types=1);

require_once('./S1.05_lv.1_gos.php');
require_once('./S1.05_lv.1_gat.php');

abstract class Animal{
    protected string $tipoAnimal;

    public function __construct(string $tipoAnimal){
        $this->tipoAnimal = $tipoAnimal;
    }

    abstract function makeSound(): void;
}
?>