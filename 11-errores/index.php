<?php
     try {
        throw new Exception('Errores de Logica');
     } catch (Exception $e) {
        echo "Ha habido un error".$e->getMessage();
     }

     
?>