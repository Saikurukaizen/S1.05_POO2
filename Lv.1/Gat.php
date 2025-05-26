<?php
declare(strict_types=1);

class Gat extends Animal{
    
    public function makeSound(): void{
        echo $this->tipoAnimal. " ha maullado: Miau!" . PHP_EOL;
    }
}