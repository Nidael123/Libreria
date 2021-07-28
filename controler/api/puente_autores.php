<?php  
	require_once '../../model/objetos/autor.php';

	$variable = null;
	
	switch ($_SERVER['REQUEST_METHOD']) 
	{
		case 'POST':
			echo("estoy en post");
			$variable = new autor();
			$variable->cntr_ingreso($_POST['nombre']);
			$variable->ingresar();
			break;
		case 'GET':
			$variable = new autor();
			$variable->buscar();
			break;
		case 'PUT':
			echo("estoy en put");
			break;
	}
?>