<?php
       class conexion{
        private $userName="root";
        private $password="";
        private $serverName="localhost";
        private $databaseName="";
        private $conexion="";

        public function getConexion(){
            try {
                // try es intentar hacer la conexion
                // se establece la conexion con la based de datos
                $this->conexion=new PDO("mysql:host=$this->serverName;
                dbname=$this->databaseName",$this->userName,$this->password);
                // echo "Se esta conexion ";
                return $this->conexion;
            } catch (PDOException $e) {
                // catch atrapar el error que se encuentre
                echo "Error en la conexion con la base de datos".$e->getMessage();
                return "";
            }

        }
        public function closeConexion(){
            $this->conexion=null;
            // echo "Se cerró conexión";
        }
    }

?>