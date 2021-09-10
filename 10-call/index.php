<?php
     class Persona{
         private $nombre = 'Trok';
         private $edad = 20;
         private $ciudad = 'Lima';
     

     public function __construct($nombre,$edad,$ciudad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    public function __call($name, $arguments)
    {
        //return "No Existe el metodo <br/>";
        $pri3 = substr($name,0,3);
        var_dump($pri3);
        if ($pri3 == 'get') {
            $dato = substr(strtolower($name),3);
            return $this->$dato;
        }

    }
}

$objPersona = new Persona("Carlos",31,'Lima');
echo $objPersona->getNombre();
echo $objPersona->getEdad();
echo $objPersona->getCiudad();

     
?>