<?php
     
     trait Utilidades{
        public function mostrarNombre(){
            echo "El nombre es : ".$this->nombre."<br/>";
        }
     }

     class Coche{
        public $llantas;
        public $nombre;
        use Utilidades;
     }

     class Persona{
        public $nombre;
        public $peso;
        use Utilidades;
     }

     class VideoJuego{
        public $nombre;
        public $jugadores;
        use Utilidades;
     }

$objCoche = new Coche();
$objPersona = new Persona();
$objVideoJuego = new VideoJuego();
$objCoche->nombre = "Coche";
$objPersona->nombre = "Persona";
$objVideoJuego->nombre = "Juego";
var_dump($objCoche);
var_dump($objPersona);
var_dump($objVideoJuego);
$objCoche->mostrarNombre();
$objPersona->mostrarNombre();
$objVideoJuego->mostrarNombre();

?>