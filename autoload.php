<?php
function autocargar($classname)
{
    include 'Controller/'.$classname.'.php';
}
spl_autoload_register('autocargar');