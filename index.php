<?php 
include "Views/header.php";
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
<?php
require_once 'autoload.php';
if(isset($_GET['controller'])){ //Comprovem que rebem valor de la variable controller
    $controller = $_GET['controller'] . 'Controller'; //Guardem el valor concatenat amb controller
    if(class_exists($controller)){ // Comprovem que existeixi la classe controller
        $controller = new $controller(); //Instanciem la classe
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            if(method_exists($controller, $action)){
                $controller->$action();
            }else{
                echo "La accion no existe";
            }
        }else{
            $controller->index();
        }
      }
    else{
        echo "El controlador no existe";
    }
  }

?>
    </div>
  </div>
</div>
<?php
include "Views/footer.php";
?>