<?php

        require_once("Config/database.php");
    class ticket{

        public $codi;
        public $codi_reserva;
        public $total;
        public $data_ticket;


        public function insertar(){
    
                $conexion = new database();
                $a = $conexion->connect();
                $sqltotal="SELECT (r.nombre_places * v. preu) as total FROM reserva as r INNER JOIN vol as v on r.codi_vol = v.codi WHERE r.codi = '$this->codi_reserva'";
                $resultado = $a->query($sqltotal);
                $row=$resultado->fetch_assoc();
                $preut=$row['total'];
                $sql = "INSERT INTO ticket (codi_reserva,total) VALUES ('$this->codi_reserva','$preut')";
                $a->query($sql);
                $a->close();
        }

        public function eliminar(){
                $conexion = new database();
                $sql = "DELETE FROM ticket WHERE codi = '$this->codi'";
                $a = $conexion->connect();
                $a->query($sql);
                $a->close();
        }

        public function modificar(){
                $conexion = new database();
                $sql = "UPDATE ticket SET data_ticket = '$this->data_ticket', total = '$this->total' WHERE codi = '$this->codi'";
                $a = $conexion->connect();
                $a->query($sql);
                $a->close();
        }

        public function buscar(){
                $conexion = new database();
                $sql = "SELECT * FROM ticket WHERE codi = '$this->codi'";
                $a = $conexion->connect();
                $resultado = $a->query($sql);
                $a->close();
                return $resultado;
        }

        public function listar(){
                $conexion = new database();
                $sql = "SELECT * FROM ticket";
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