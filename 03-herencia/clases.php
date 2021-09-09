<?php
     
class Persona{

    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    public function __construct(){
        $this->nombre ="trok";
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function hablar(){
        return "Hola que hace";
    }

    public function caminar(){
        return "Estoy caminando";
    }
}

class Informatico extends Persona{

    public $lenguajes;
    public $experienciaProramador;

   

    public function __construct(){
        parent::__construct();
        $this->lenguajes ="HTML";
        $this->experienciaProramador =10;
    }

    public function sabeLenguaje($lenguajes){
        $this->$lenguajes = $lenguajes;
    }

    public function programar(){
        return "Estoy Programando";
    }

    public function repararOrdenador(){
        return "Reparar PC";
    }

    public function hacerOfimatica(){
        return "Escribiendo Word";
    }


}
?>