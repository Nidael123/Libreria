<?php  ob_start();
	require_once '../../model/objetos/libros.php';

	$variable = null;

	switch ($_SERVER['REQUEST_METHOD']) 
	{
		case 'POST':
			$file_name = $_FILES['imagen']['name'];
			$file_tmp = $_FILES['imagen']['tmp_name'];
			
			$route = $_SERVER["DOCUMENT_ROOT"]."/Libreria/resources/imagenes_libros/".$_POST['titulo'];
			

			if (!is_dir($route)) {
    			mkdir($route, 0777, true);
			}
			//$route2 = "resources/imagenes_libros/".$file_name;
			$route2 = $route."/".$file_name;
			
			if(empty($_FILES['imagen']["name"]))
			{
				return;
			}
			if(move_uploaded_file($file_tmp, $route2))
			{
				//$route2 = "resources/imagenes_libros/".$_POST['titulo']."/".$file_name;
				$variable = new libro();
				$variable->cntr_ingreso($_POST['titulo'],$_POST['editorial'],$_POST['anio'],$_POST['autor'],"resources/imagenes_libros/".$_POST['titulo']."/".$file_name,$_POST['descripcion']);
				$variable->guardar_libro();
			}
			else
			{
				echo "mala coneccion";
			}
		break;
		case 'GET':
			$variable = new libro();
			$variable->buscar_libros();
		break;
		case 'PUT':
			echo("estoy en put");
		break;
	}
	header("Location: ../../index.php");
?>