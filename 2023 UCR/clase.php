<?php
//nombre
    class persona{
        //atributos variables

        public $nombre;
        public $cedula;
        public $apellido;
        public $correo;

        //constructor

        public function __construct($nombre, $cedula,$apellido, $correo )
        {
            $this-> $nombre = $nombre;
            $this-> $cedula =  $cedula;
            $this-> $apellido = $apellido;
            $this-> $correo = $correo;
    
        }

        //set y get que son lsa funciones
        //metodos void
        public function setNombre($nombre)
        {
                $this->nombre =$nombre;
        }
        public function getNombre()
        {
                 return $this->nombre;
        }

    }

    $persona = new persona('','','','');
    $persona ->setNombre('Dago');
    
    echo $persona->getNombre();

?>
