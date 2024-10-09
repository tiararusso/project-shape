<?php
//Área de un círculo = π * r² 
include_once("shapeInterface.php");
class Circle implements Shape{
    private $radius;
    public function __construct($r) {
        $this->radius = $r;
    }

    public function calculateArea(): float { //la firma siempre tiene que estar porque fue declarada en la interface 

        return 3.14*$this->radius*$this->radius;
    }
    
}


?>