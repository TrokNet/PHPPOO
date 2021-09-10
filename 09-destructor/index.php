<?php
     
     class Usuario{
    
        public $nombre;
        public $email;

        public function __construct(){
            $this->nombre = "Carlos Ledesma";
            $this->email = "cb.ledesmac@gmail.com";
            echo "Creando el objeto <br/>";
        }

        public function __toString(){
         return "Hola, {$this->nombre}, estas registrado con {$this->email}";
     }

     public function __destruct(){
        echo "Destruyendo el objeto";
    }
    }
     
     $objUsuario = new Usuario();
     var_dump($objUsuario);
?>