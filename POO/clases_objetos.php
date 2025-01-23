<?php

//Para crear una clase la primera letra debe ser mayuscula

# Clase
class Jugador{
    //Atributos de la clase
    public $nombre;
    public $posicion;
    public $numero;
    private $status;  #A esto se le llama encapsulamiento, es decir, no se puede acceder directamente desde fuera de la clase

 # Metodos de una clase
    
    public function entrenar(){
        echo "El jugador " . $this->nombre ." esta entrenando ";
    }

    public function jugar(){
        echo $this->nombre . " esta jugando ";
    }

    // Método para cambiar el status (encapsulamiento correcto)
    public function setStatus($estado){
        $this->status = $estado;
    }
    // Método para obtener el status
    public function getStatus(){
        return $this->status;
    }
}


//Objeto 1

$jugador1 = new Jugador();
$jugador1->nombre = "Lionel Messi";
$jugador1->posicion = "Medio Campista";
$jugador1->numero = 10;
$jugador1->entrenar();
$jugador1->setStatus("Activo");


var_dump($jugador1);


//Objeto 2
$jugador2 = new Jugador();
$jugador2->nombre = "Cristiano Ronaldo";
$jugador2->posicion = "Delantero";
$jugador2->numero = 7;
$jugador2->jugar();
$jugador2->setStatus("Lesionado");

var_dump($jugador2);