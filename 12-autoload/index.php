<?php
      include_once 'autoload.php';
    //include_once 'clases/usuario.php';
     $objUsuario = new Usuario();
     $objCategoria = new Categoria();
     $objEntrada = new Entrada();
     echo $objUsuario->nomUsu;
     echo $objEntrada->nomEnt;
     echo $objCategoria->nomCat;
     echo $objUsuario->desUsu;
     echo $objCategoria->desCat;
     echo $objEntrada->desEnt;

?>""