<?php

    class reserva
    {

        private $codi;
        private $codi_vol;
        private $codi_usuari;
        private $data_anada;
        private $data_tornada;
        private $nombre_places;

        public function __construct($codi,$codi_vol,$codi_usuari,$data_anada,$data_tornada,$nombre_places)
        {
            $this->codi=$codi;
            $this->codi_vol=$codi_vol;
            $this->codi_usuari=$codi_usuari;
            $this->data_anada=$data_anada;
            $this->data_tornada=$data_tornada;
            $this->nombre_places=$nombre_places;

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
         * Get the value of codi_vol
         */ 
        public function getCodi_vol()
        {
                return $this->codi_vol;
        }

        /**
         * Set the value of codi_vol
         *
         * @return  self
         */ 
        public function setCodi_vol($codi_vol)
        {
                $this->codi_vol = $codi_vol;

                return $this;
        }

        /**
         * Get the value of codi_usuari
         */ 
        public function getCodi_usuari()
        {
                return $this->codi_usuari;
        }

        /**
         * Set the value of codi_usuari
         *
         * @return  self
         */ 
        public function setCodi_usuari($codi_usuari)
        {
                $this->codi_usuari = $codi_usuari;

                return $this;
        }

        /**
         * Get the value of data_anada
         */ 
        public function getData_anada()
        {
                return $this->data_anada;
        }

        /**
         * Set the value of data_anada
         *
         * @return  self
         */ 
        public function setData_anada($data_anada)
        {
                $this->data_anada = $data_anada;

                return $this;
        }

        /**
         * Get the value of data_tornada
         */ 
        public function getData_tornada()
        {
                return $this->data_tornada;
        }

        /**
         * Set the value of data_tornada
         *
         * @return  self
         */ 
        public function setData_tornada($data_tornada)
        {
                $this->data_tornada = $data_tornada;

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