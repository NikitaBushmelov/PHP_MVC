<?php
    require_once("Models/ticket.php");
    class ticketController{
        public function mostrarticket()
        {
            $ticket = new ticket();
            $tickets = $ticket->listar();
            require_once 'Views/ticket/mostrarticket.php';
        }
        public function pagarticket(){
            $ticket = new ticket();
            $ticket->codi = $_POST['nom'];
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
    }
?>