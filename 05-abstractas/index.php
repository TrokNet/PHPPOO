<?php
     
   abstract class OrdenadorP{

    public $encendido;
    
    abstract public function encender();

    public function apagar(){
        $this->encendido = false;
    }
   }
     
   class PcAsus extends Ordenador{
       public $software;

       public function encender(){
        $this->encendido = true;
       }

       public function arrancarSoftware(){
           $this->software = true;
       }
   }
?>