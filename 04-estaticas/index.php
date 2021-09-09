<?php
     
    require_once 'configuracion.php';

Configuracion::setColor("Blue");
Configuracion::setEntorno("localhost");
Configuracion::setNewsletter("true");

echo Configuracion::$color;
echo Configuracion::$entorno;
echo Configuracion::$newsletter;
?>