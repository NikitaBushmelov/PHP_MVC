<?php
    require_once("Models/usuari.php");
    class usuariController{
        public function mostrarusuari()
        {
            $usuari = new usuari();
            $usuaris = $usuari->listar();
            require_once 'Views/usuari/mostrarusuari.php';
        }
        public function insertarusuari(){
            require_once 'Views/usuari/insertarusuari.php';
        }
        public function guardarusuari(){
            $usuari = new usuari();
            $usuari->nom = $_POST['nom'];
            $usuari->contrasenya =$_POST['contrasenya'];
            $usuari->correu = $_POST['correu'];
            $usuari->adreça = $_POST['adreça'];
            $usuari->dni = $_POST['dni'];
            $usuari->telefon = $_POST['telefon'];
            $usuari->num_tarjeta = $_POST['num_tarjeta'];
            $usuari->rol = $_POST['rol'];
            $usuari->insertar();
            header("Location: index.php?controller=usuari&action=mostrarusuari");
        }
        public function index(){
            require_once 'index.php';
        }
        public function eliminarusuari()
        {
            $usuari = new usuari();
            $usuari->codi=$_REQUEST['codi'];
            $usuari->eliminar();
            header("Location: index.php?controller=usuari&action=mostrarusuari");
            
        }
        public function modificarusuari()
        {
            $usuari = new usuari();
            $usuari->codi=$_REQUEST['codi'];
            $resultado=$usuari->buscar();
            $row=$resultado->fetch_assoc();
            require_once 'Views/usuari/modificarusuari.php';
        }

        public function actualitzarusuari()
        {
            $usuari = new usuari();
            $usuari->codi = $_POST['codi'];
            $usuari->nom = $_POST['nom'];
            $usuari->contrasenya = $_POST['contrasenya'];
            $usuari->correu = $_POST['correu'];
            $usuari->adreça = $_POST['adreça'];
            $usuari->dni = $_POST['dni'];
            $usuari->telefon = $_POST['telefon'];
            $usuari->num_tarjeta = $_POST['num_tarjeta'];
            $usuari->rol = $_POST['rol'];
            $usuari->modificar();
            header("Location: index.php?controller=usuari&action=mostrarusuari");
        }
    
    }
?>