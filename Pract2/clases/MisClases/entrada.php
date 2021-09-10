<?php
    namespace MisClases;
     
     class Entrada{
         public $titulo;
         public $fecha;

         public function __construct()
         {
             $this->titulo = 'El titulo de la entrada';
             $this->fecha = "La fecha es...";
         }
     }
?>