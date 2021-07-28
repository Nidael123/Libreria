<?php 

	class busqueda
	{
		public $con = null;
		public $autor = null;

		public function todos_autores()
		{
			$autor = new autor();
			$sql = "select * from autores";
			$con = new coneccion();
			$variable = $con->conectar();
			//echo $variable;//IMPORTANTE HAY QUE MANEJAR LOS ERRORES 
			$query = $variable->prepare($sql);

			$error = $query->execute();
			$array1 = array();

			if($error)
			{
				$datos = $query->fetchALL(PDO::FETCH_ASSOC);

				if($datos != null)
				{
					foreach ($datos as $key) 
					{
						$autor->cnts_busqueda($key['id_autor'],$key['nombre']);
						$array_help = array('id_autor'=>$autor->get_id(), 'nombre'=> $autor->get_nombre()); 
						array_push($array1, $array_help);
					}
					print_r(json_encode($array1));
				}

			}
			else{
				echo $error;
			}

		}

		public function todas_editorial()
		{
			$editor = new editorial();
			$sql = "select * from editorial";
			$con = new coneccion();
			$variable = $con->conectar();

			$query = $variable->prepare($sql);
			$error = $query->execute();

			$array1 = array();
			if($error)
			{
				$datos = $query->fetchALL(PDO::FETCH_ASSOC);

				if($datos != null)
				{
					foreach ($datos as $key) 
					{
						$editor->cnst_editorial($key['id_editorial'],$key['nombre']);
						$array_help = array('id_editorial'=>$editor->get_id(), 'nombre'=>$editor->get_nombre());
						array_push($array1, $array_help);
					}
					print_r(json_encode($array1));
				}
				else
				{
					 
				}
			}
			else
			{
				echo('error de select');
			}
		}
		public function todos_libros()
		{
			$libro = new libro();
			$sql = "select * from libro";
			$con = new coneccion();
			$variable = $con->conectar();
			//echo $variable;//IMPORTANTE HAY QUE MANEJAR LOS ERRORES 
			$query = $variable->prepare($sql);

			$error = $query->execute();
			$array1 = array();

			if($error)
			{
				$datos = $query->fetchALL(PDO::FETCH_ASSOC);

				if($datos != null)
				{
					foreach ($datos as $key) 
					{
						$libro->cnts_busqueda($key['id_libro'],$key['titulo'],$key['editorial'],$key['anio'],$key['autor'],$key['image']);
						$array_help = array('id_libro'=>$libro->get_id_libro(), 'titulo'=> $libro->get_titulo(),'editorial'=>$libro->get_editorial(),'anio'=>$libro->get_anio(),'autor'=>$libro->get_autor(),'image'=>$libro->get_image()); 
						array_push($array1, $array_help);
					}
					print_r(json_encode($array1));
				}

			}
			else{
				echo $error;
			}
		}	
	}
?>