<?php

        require_once("Config/database.php");
    class usuari
    {

        public $codi;
        public $nom;
        public $contrasenya;
        public $correu;
        public $adreça;
        public $dni;
        public $telefon;
        public $num_tarjeta;
        public $rol;

        public function insertar(){
    
                $conexion = new database();
                $sql = "INSERT INTO usuari (nom,contrasenya,correu,adreça,dni,telefon,num_tarjeta) VALUES ('$this->nom','$this->contrasenya','$this->correu','$this->adreça','$this->dni','$this->telefon','$this->num_tarjeta')";
                $a = $conexion->connect();
                $a->query($sql);
                $a->close();
        }

        public function modificar(){
                $conexion = new database();
                $sql = "UPDATE usuari SET nom = '$this->nom',contrasenya = '$this->contrasenya',adreça = '$this->adreça',correu = '$this->correu', telefon = '$this->telefon',num_tarjeta = '$this->num_tarjeta' WHERE codi = '$this->codi'";
                $a = $conexion->connect();
                $a->query($sql);
                $a->close();
        }

        public function buscar(){
                $conexion = new database();
                $sql = "SELECT * FROM usuari WHERE codi = '$this->codi'";
                $a = $conexion->connect();
                $resultado = $a->query($sql);
                $a->close();
                return $resultado;
        }

        public function listar(){
                $conexion = new database();
                $sql = "SELECT * FROM usuari";
                $a = $conexion->connect();
                $resultado = $a->query($sql);
                $a->close();
                return $resultado;
        }

        public function eliminar(){
                $conexion = new database();
                $sql = "DELETE FROM usuari WHERE codi = '$this->codi'";
                $a = $conexion->connect();
                $a->query($sql);
                $a->close();
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
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of contrasenya
         */ 
        public function getContrasenya()
        {
                return $this->contrasenya;
        }

        /**
         * Set the value of contrasenya
         *
         * @return  self
         */ 
        public function setContrasenya($contrasenya)
        {
                $this->contrasenya = $contrasenya;

                return $this;
        }

        /**
         * Get the value of correu
         */ 
        public function getCorreu()
        {
                return $this->correu;
        }

        /**
         * Set the value of correu
         *
         * @return  self
         */ 
        public function setCorreu($correu)
        {
                $this->correu = $correu;

                return $this;
        }

        /**
         * Get the value of adreça
         */ 
        public function getAdreça()
        {
                return $this->adreça;
        }

        /**
         * Set the value of adreça
         *
         * @return  self
         */ 
        public function setAdreça($adreça)
        {
                $this->adreça = $adreça;

                return $this;
        }

        /**
         * Get the value of dni
         */ 
        public function getDni()
        {
                return $this->dni;
        }

        /**
         * Set the value of dni
         *
         * @return  self
         */ 
        public function setDni($dni)
        {
                $this->dni = $dni;

                return $this;
        }

        /**
         * Get the value of telefon
         */ 
        public function getTelefon()
        {
                return $this->telefon;
        }

        /**
         * Set the value of telefon
         *
         * @return  self
         */ 
        public function setTelefon($telefon)
        {
                $this->telefon = $telefon;

                return $this;
        }

        /**
         * Get the value of num_tarjeta
         */ 
        public function getNum_tarjeta()
        {
                return $this->num_tarjeta;
        }

        /**
         * Set the value of num_tarjeta
         *
         * @return  self
         */ 
        public function setNum_tarjeta($num_tarjeta)
        {
                $this->num_tarjeta = $num_tarjeta;

                return $this;
        }

        /**
         * Get the value of rol
         */ 
        public function getRol()
        {
                return $this->rol;
        }

        /**
         * Set the value of rol
         *
         * @return  self
         */ 
        public function setRol($rol)
        {
                $this->rol = $rol;

                return $this;
        }
    }

?>