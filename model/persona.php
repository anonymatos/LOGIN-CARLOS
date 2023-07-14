<?php
     class persona{
        public $id;
        public $idRol;
        public $nombre;
        public $apellido;
        public $telefono;
        public $correo;
        public $password;
        public $pregunta1;
        public $respuesta1;
        public $pregunta2;
        public $respuesta2;
        public $pregunta3;
        public $respuesta3;
      
    
        function __get($propiedad) {
            if (property_exists($this,$propiedad)) {
                return $this -> $propiedad;
            }
        }
        function __set($propiedad,$valor) {
            if (property_exists($this,$propiedad)) {
                 $this -> $propiedad = $valor;
            }
        } 
        // metodo constructor
        function __construct(
            $id,
            $idRol,
           $nombre,
         $apellido,
         $telefono,
           $correo,
         $password,
        $pregunta1,
       $respuesta1,
        $pregunta2,
       $respuesta2,
        $pregunta3,
       $respuesta3,){
         $this->id=$id;
         $this->id=$idRol;
         $this->nombre=$nombre;
         $this->apellido=$apellido;
         $this->telefono=$telefono;
         $this->correo=$correo;
         $this->password=$password;
         $this->pregunta1=$pregunta1;
         $this->respuesta1=$respuesta1;
         $this->pregunta2=$pregunta2;
         $this->respuesta2=$respuesta2;
         $this->pregunta3=$pregunta3;
         $this->respuesta3=$respuesta3;
   
        }  

    }
?>