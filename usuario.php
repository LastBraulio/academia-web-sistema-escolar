<?php

require_once('controller/controller_usuario.php');
	
$controller= new Controller_usuario();
    
if(!empty($_REQUEST['m'])){
    $metodo=$_REQUEST['m'];
    if (method_exists($controller, $metodo)) {
        $controller->$metodo(); // traer metodo usuarip.php?m=
    }else{
		if ($metodo == "index" or "")
		{
			$controller->index();
		}else{
			$controller->error404();
            //$controller->index();
		}
    }
}else
{
    $controller->index();
}

?>