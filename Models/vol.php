<?php

        require_once("../Config/database.php");
    class vol
    {

        private $codi;
        private $origen;
        private $desti;
        private $preu;
        private $foto;
        private $nombre_places;

        public function __construct($origen,$desti,$preu,$foto,$nombre_places)
        {
            $this->origen=$origen;
            $this->desti=$desti;
            $this->preu=$preu;
            $this->foto=$foto;
            $this->nombre_places=$nombre_places;
        }

        public function insertar(){
    
                $conexion = new database();
                $sql = "INSERT INTO vol (origen,desti,preu,foto,nombre_places) VALUES ('$this->origen','$this->desti','$this->preu','$this->foto','$this->nombre_places')";
                $a = $conexion->connect();
                $a->query($sql);
                $a->close();
        }

        public function eliminar(){
                $conexion = new database();
                $sql = "DELETE FROM vol WHERE codi = '$this->codi'";
                $a = $conexion->connect();
                $a->query($sql);
                $a->close();
        }

        public function modificar(){
                $conexion = new database();
                $sql = "UPDATE vol SET origen = '$this->origen', desti = '$this->desti', preu = '$this->preu', foto = '$this->foto', nombre_places = '$this->nombre_places' WHERE codi = '$this->codi'";
                $a = $conexion->connect();
                $a->query($sql);
                $a->close();
        }
             
        public function buscar(){
                $conexion = new database();
                $sql = "SELECT * FROM vol WHERE codi = '$this->codi'";
                $a = $conexion->connect();
                $resultado = $a->query($sql);
                $a->close();
                return $resultado;
        }
            
        public function listar(){
                $conexion = new database();
                $sql = "SELECT * FROM vol";
                $a = $conexion->connect();
                $resultado = $a->query($sql);
                $a->close();
                return $resultado;
        }

        /**
         * Get the value of codi
         */ 
        public function getCodi()
        {
                return $this->codi;
        }

        /**
         * Set the value of codi
         *
         * @return  self
         */ 
        public function setCodi($codi)
        {
                $this->codi = $codi;

                return $this;
        }

        /**
         * Get the value of origen
         */ 
        public function getOrigen()
        {
                return $this->origen;
        }

        /**
         * Set the value of origen
         *
         * @return  self
         */ 
        public function setOrigen($origen)
        {
                $this->origen = $origen;

                return $this;
        }

        /**
         * Get the value of desti
         */ 
        public function getDesti()
        {
                return $this->desti;
        }

        /**
         * Set the value of desti
         *
         * @return  self
         */ 
        public function setDesti($desti)
        {
                $this->desti = $desti;

                return $this;
        }

        /**
         * Get the value of preu
         */ 
        public function getPreu()
        {
                return $this->preu;
        }

        /**
         * Set the value of preu
         *
         * @return  self
         */ 
        public function setPreu($preu)
        {
                $this->preu = $preu;

                return $this;
        }

        /**
         * Get the value of foto
         */ 
        public function getFoto()
        {
                return $this->foto;
        }

        /**
         * Set the value of foto
         *
         * @return  self
         */ 
        public function setFoto($foto)
        {
                $this->foto = $foto;

                return $this;
        }

        /**
         * Get the value of nombre_places
         */ 
        public function getNombre_places()
        {
                return $this->nombre_places;
        }

        /**
         * Set the value of nombre_places
         *
         * @return  self
         */ 
        public function setNombre_places($nombre_places)
        {
                $this->nombre_places = $nombre_places;

                return $this;
        }
    }

?>