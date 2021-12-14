<?php

        require_once("config/database.php");
    class ticket{

        private $codi;
        private $codi_reserva;
        private $total;
        private $data_ticket;

        public function __construct($codi_reserva,$total,$data_ticket)
        {
                $this->codi_reserva=$codi_reserva;
                $this->total=$total;
                $this->data_tickket=$data_ticket;
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
         * Get the value of codi_reserva
         */ 
        public function getCodi_reserva()
        {
                return $this->codi_reserva;
        }

        /**
         * Set the value of codi_reserva
         *
         * @return  self
         */ 
        public function setCodi_reserva($codi_reserva)
        {
                $this->codi_reserva = $codi_reserva;

                return $this;
        }

        /**
         * Get the value of total
         */ 
        public function getTotal()
        {
                return $this->total;
        }

        /**
         * Set the value of total
         *
         * @return  self
         */ 
        public function setTotal($total)
        {
                $this->total = $total;

                return $this;
        }

        /**
         * Get the value of data_ticket
         */ 
        public function getData_ticket()
        {
                return $this->data_ticket;
        }

        /**
         * Set the value of data_ticket
         *
         * @return  self
         */ 
        public function setData_ticket($data_ticket)
        {
                $this->data_ticket = $data_ticket;

                return $this;
        }
    }

    $ticket1=new ticket(1,1,125,"2020-10-22");
    echo $ticket1->getData_ticket();
?>