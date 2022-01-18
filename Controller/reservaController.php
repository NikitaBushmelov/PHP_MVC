<?php
    require_once("Models/reserva.php");
    class reservaController{
        public function mostrarreserva()
        {
            $reserva = new reserva();
            $reservas = $reserva->listar();
            require_once 'Views/reserva/mostrarreserva.php';
        }
        public function insertarreserva(){
            require_once 'Views/reserva/insertarreserva.php';
        }
        public function guardarreserva(){
            $reserva = new reserva();
            $reserva->codi_vol = $_REQUEST['codi_vol'];
            $reserva->codi_usuari = $_REQUEST['codi_usuari'];
            $reserva->data_anada = $_REQUEST['data_anada'];
            $reserva->data_tornada = $_REQUEST['data_tornada'];
            $reserva->nombre_places = $_REQUEST['nombre_places'];
            $reserva->insertar();
            header("Location: index.php?controller=reserva&action=mostrarreserva");
        }
        public function index(){
            require_once 'index.php';
        }
        public function eliminarreserva()
        {
            $reserva = new reserva();
            $reserva->codi=$_REQUEST['codi'];
            $reserva->eliminar();
            header("Location: index.php?controller=reserva&action=mostrarreserva");
            
        }
        public function modificarreserva()
        {
            $reserva = new reserva();
            $reserva->codi=$_REQUEST['codi'];
            $resultado=$reserva->buscar();
            $row=$resultado->fetch_assoc();
            require_once 'Views/reserva/modificarreserva.php';
        }

        public function actualitzarreserva(){
          $reserva = new reserva();
          $reserva->codi = $_POST['codi'];
          $reserva->data_anada = $_POST['data_anada'];
          $reserva->data_tornada = $_POST['data_tornada'];
          $reserva->nombre_places = $_POST['nombre_places'];
          $reserva->modificar();
          header("Location: index.php?controller=reserva&action=mostrarreserva");
        }
    
    }
?>