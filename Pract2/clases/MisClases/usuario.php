<?php
     namespace MisClases;
     class Usuario{
         public $nombre;
         public $email;

         public function __construct()
         {
             $this->nombre = "Carlos Ledesma";
             $this->email = "cb.ledesmac@gmail.com";
         }
     }
?>