<?php
     
     interface Ordenador{
         public function encender();
         public function apagar();
         public function reiniciar();
         public function desfragmentar();
         public function detectarUSB();
     }

     class iMac implements Ordenador{
         public $modelo = "Ferrari";

        public function encender(){}
        public function apagar(){}
        public function reiniciar(){}
        public function desfragmentar(){}
        public function detectarUSB(){}

         public function getModelo(){
             return $this->modelo;
         }

         public function setModelo($modelo){
             $this->modelo=$modelo;
         }
     }

     $objImac = new iMac();
     var_dump($objImac);

?>