<?php
	require_once('controller/controller_matricula.php');
	
	$controller= new Controller_matricula();
    
    if(!empty($_REQUEST['m'])){
        $metodo=$_REQUEST['m'];
        if (method_exists($controller, $metodo)) {
            $controller->$metodo();
        }else{
			if ($metodo == "index" or "")
			{
				$controller->index();
			}else{
				$controller->error404();
			}
        }
    }else{
        $controller->index();
    }




?>