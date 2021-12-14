<?php

    class usuari
    {

        private $nom;
        private $contrasenya;
        private $correu;
        private $adreça;
        private $dni;
        private $telefon;
        private $num_tarjeta;
        private $rol;

        public function __construct($nom,$contrasenya,$correu,$adreça,$dni,$telefon,$num_tarjeta,$rol)
        {
            $this->nom=$nom;
            $this->contrasenya=$contrasenya;
            $this->correu=$correu;
            $this->adreça=$adreça;
            $this->dni=$dni;
            $this->telefon=$telefon;
            $this->num_tarjeta=$num_tarjeta;
            $this->rol=$rol;
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