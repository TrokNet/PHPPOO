<?php
     require_once 'autoload.php';
    use MisClases\Usuario;
    use MisClases\Categoria;
    use MisClases\Entrada;
    use Mantenimiento\Usuario as Trok;

     class Principal{
         public $usuario;
         public $categoria;
         public $entrada;

         public function __construct()
         {
             $this->usuario = new Usuario();
             $this->categoria = new Categoria();
             $this->entrada = new Entrada();

         }
     }

     $objPrincipal = new Principal();
     var_dump($objPrincipal->usuario);

     $objUsu2 = new Trok();
     var_dump($objUsu2);
?>