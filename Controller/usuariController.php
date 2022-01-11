<?php
    require_once("Models/usuari.php");
    class usuariController{
        public function mostrarVols()
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
            $usuari->contrasenya = $_POST['contrasenya'];
            $usuari->correu = $_POST['correu'];
            $usuari->adreça = $_POST['adreça'];
            $usuari->dni = $_POST['dni'];
            $usuari->dni = $_POST['telefon'];
            $usuari->dni = $_POST['num_tarjeta'];
            $usuari->dni = $_POST['rol'];
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
            require_once 'Views/usuari/modificarusuari.php';
        }
    
    }
?>