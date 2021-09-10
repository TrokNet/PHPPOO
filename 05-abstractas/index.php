<?php
     
   abstract class Ordenador{

    public $encendido;
    
    abstract public function encender();

    public function apagar(){
        $this->encendido = false;
    }
   }
     
   class PcAsus extends Ordenador{
       public $software;
      
       //public function arrancarSoftware(){
         //  $this->software = true;
       //}
       public function encender(){
        $this->encendido = true;
       }
   }
   $objordenador = new PcAsus();
   var_dump($objordenador);
   $objordenador->encendido = false;
   $objordenador->apagar(true);
   $objordenador->software = 'Trok';
   var_dump($objordenador);
