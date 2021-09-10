<?php
     
     //use D1\Curso;
     //use D1\Proyecto;
     //use D1\Usuario;
     //use D2\Usuario2;
     //require_once 'Clases/usuario.php';

     class Principal{
         public $usuario;
         public $curso;
         public $proyecto;

         public function __construct()
         {
             //$this->usuario = new D1\Usuario();
             $this->curso = new MisClases\Curso();
             //$this->proyecto = new D1\Proyecto();
         }
     }

     //Objeto Principal
     $principal = new Principal();
     var_dump($principal->curso);

     //Objeto de otro paquete
     //$objusuario = new Usuario2();
     //$objUsuario = new Usuario2();

     //$objCurso = new Curso();
     //var_dump($curso);
?>