<?php
declare (strict_types=1);
abstract class Animal {
    protected $nombre;

    public function setNombre(string $nom){
        $this->nombre = $nom;
    }

    abstract protected function makeSound ();

}
?>