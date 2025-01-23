<?php
#Clase1 

class Jugador{
    public $nombre;
    public $posicion;
    public $numero;
//------------CONSTRUCTOR----------//
    public function __construct($nombre, $posicion, $numero){
        $this->nombre = $nombre;
        $this->posicion = $posicion;
        $this->numero = $numero;
    }

    public function entrenar(){
        return "El jugador {$this->nombre} está entrenando ";
    }
}
// Se crea el objeto y se le asignan sus atributos

$jugador1 = new Jugador("Lionel Messi", "Delantero", 10);

echo $jugador1->entrenar();

var_dump($jugador1);

