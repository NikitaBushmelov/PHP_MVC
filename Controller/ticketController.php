<?php
    require_once("Models/ticket.php");
    class ticketController{
        public function mostrarticket()
        {
            $ticket = new ticket();
            $tickets = $ticket->listar();
            require_once 'Views/ticket/mostrarticket.php';
        }
        public function insertarticket(){
            require_once 'Views/ticket/insertarticket.php';
        }
        public function guardarticket(){
            $ticket = new ticket();
            $ticket->nom = $_POST['nom'];
            $ticket->contrasenya = $_POST['contrasenya'];
            $ticket->correu = $_POST['correu'];
            $ticket->adreça = $_POST['adreça'];
            $ticket->dni = $_POST['dni'];
            $ticket->dni = $_POST['telefon'];
            $ticket->dni = $_POST['num_tarjeta'];
            $ticket->dni = $_POST['rol'];
            $ticket->insertar();
            header("Location: index.php?controller=ticket&action=mostrarticket");
        }
        public function index(){
            require_once 'index.php';
        }
        public function eliminarticket()
        {
            $ticket = new ticket();
            $ticket->codi=$_REQUEST['codi'];
            $ticket->eliminar();
            header("Location: index.php?controller=ticket&action=mostrarticket");
            
        }
        public function modificarticket()
        {
            require_once 'Views/ticket/modificarticket.php';
        }
    
    }
?>