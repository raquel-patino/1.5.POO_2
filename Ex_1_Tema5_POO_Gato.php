<?php
declare (strict_types=1);
require_once "Ex_1_Tema5_POO_Animal.php";
class Gato extends Animal {

public function makeSound (): void{
    echo "Hola soy $this->nombre y hago Miauuuuuu";

}

}


?>