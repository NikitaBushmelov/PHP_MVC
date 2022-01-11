<?php
    require_once("Models/vol.php");
    class volController{
        public function mostrarVols()
        {
            $vol = new vol();
            $vols = $vol->listar();
            require_once 'Views/vol/mostrarvols.php';
        }
        public function insertarvols(){
            require_once 'Views/vol/insertarvols.php';
        }
        public function guardarvols(){
            $vol = new vol();
            $vol->origen = $_POST['origen'];
            $vol->desti = $_POST['desti'];
            $vol->preu = $_POST['preu'];
            $vol->foto = $_POST['foto'];
            $vol->nombre_places = $_POST['nombre_places'];
            $vol->insertar();
            header("Location: index.php?controller=vol&action=mostrarvols");
        }
        public function index(){
            require_once 'index.php';
        }
        public function eliminarvols()
        {
            $vol = new vol();
            $vol->codi=$_REQUEST['codi'];
            $vol->eliminar();
            header("Location: index.php?controller=vol&action=mostrarvols");
            
        }
        public function modificarvols()
        {
            require_once 'Views/vol/modificarvols.php';
        }
    
    }
?>