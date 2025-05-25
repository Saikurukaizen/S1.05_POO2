<?php
declare(strict_types=1);

class Gos extends Animal{
    public function makeSound(): void{
        echo $this->tipoAnimal." ha ladrado: Bup Bup!" . PHP_EOL;
    }
}
?>