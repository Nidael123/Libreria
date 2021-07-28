<?php  
	require_once '../../model/objetos/editorial.php';
	
	$variable = null;

	switch ($_SERVER['REQUEST_METHOD']) 
	{
		case 'POST':
			echo("estoy en post");
			$variable = new editorial();
			$variable->cnst_guardar($_POST['n_editorial']);
			$variable->guardar_editorial();
			break;
		case 'GET':
			$variable = new editorial();
			$variable->buscar_editoriales();
			break;
		case 'PUT':
			echo("estoy en put");
			break;
	}
?>