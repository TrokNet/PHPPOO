<?php
     //Programacion Orientada a Objetos

    //Definir una clase (molde para crear mas objetos de tipo coche con caracteristicas parecidas)

    class Coche{
        //Atributos o Propiedades (variables)
        public $color = "Rojo";
        public $modelo = "Ferrari";
        public $velocidad = 300;
        public $caballaje = 500;
        public $plazas = 2;
    

    //Metodos acciones que hace el objeto (antes eran funciones)
    public function getColor(){
        //Busca en esta clase la propiedad x
        return $this->color;
    }

    public function setColor($color){
        $this ->color = $color;
    }

    public function acelerar(){
        $this ->velocidad++;
    }

    public function frenar(){
        $this ->velocidad--;
    }

    public function getVelocidad(){
        return $this ->velocidad;
    }
}

//Crear objeto o instanciar la clase de
$coche  = new Coche();
var_dump($coche);
echo $coche->getVelocidad();
$coche->setColor("Verde");
echo "<h1><br>El color del coche es ".$coche->getcolor()."</h1>";

$coche2 = new Coche();
$coche->setColor("Morado");
echo "<h1><br>El color del coche es ".$coche->getcolor()."</h1>";
?>