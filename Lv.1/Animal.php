<?php
declare(strict_types=1);

require_once('./Gos.php');
require_once('./Gat.php');

abstract class Animal{
    protected string $tipoAnimal;

    public function __construct(string $tipoAnimal){
        $this->tipoAnimal = $tipoAnimal;
    }

    abstract function makeSound(): void;
}
?>