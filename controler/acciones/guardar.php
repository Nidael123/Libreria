<?php  
	
	require_once '../../model/bd/coneccion.php';
	require_once 'actualizar.php';

	class guardar
	{
		public $variable = null;

		public function libro_save($titulo, $editorial, $anio, $autor, $image)
		{
			try 
			{
				$sql = "insert into libro(titulo,editorial,anio,autor,image)values(:titulo,:editorial,:anio,:autor,:ruta)";
				$variable = new coneccion();
				$con = $variable->conectar();

				$query = $con->prepare($sql);

				$query->bindParam(':titulo',$titulo,PDO::PARAM_STR,25);
				$query->bindParam(':editorial',$editorial, PDO::PARAM_INT);
				$query->bindParam(':anio',$anio, PDO::PARAM_STR,25);
				$query->bindParam(':autor',$autor, PDO::PARAM_INT);
				$query->bindParam(':ruta', $image,PDO::PARAM_STR,25);

				$error = $query->execute();

				if($error)
				{
					echo "bien";
				}
				else
				{
					throw new Exception("error de inscercion", 1);
				}	
			} 
			catch (throwable $e)
	    	{
	    		echo "error " .$e->getMessage();
	    	}
	    	catch (PDOException $e) 
	    	{
	    		echo "error " .$e->getCode();	
	    	}
		}

		public function autor_save($_name)
		{
			try
			{
				$sql = 'insert into autor (nombre) values(:name)';
				$variable = new coneccion();
				$con = $variable->conectar();;

				$query = $con->prepare($sql);
				$query->bindParam(':name', $_name, PDO::PARAM_STR, 25);

				$error = $query->execute();

				if($error)
				{
					echo "bien";
				}
				else
				{
					throw new Exception("error de inscercion", 1);
				}
			}
			catch (throwable $e)
	    	{
	    		echo "error " .$e->getMessage();
	    	}
	    	catch (PDOException $e) 
	    	{
	    		echo "error " .$e->getCode();	
	    	}
		}

		public function editorial_save($_name)
		{
			try 
			{
				$sql = 'insert into editorial (nombre) values(:nombre)';
				$variable = new coneccion();
				$con = $variable->conectar();

				$query = $con->prepare($sql);
				$query->bindParam(':nombre', $_name, PDO::PARAM_STR, 25);

				$error = $query->execute($sql);
				if($error)
				{
					echo "bien";
				}
				else
				{
					throw new Exception("error de inscercion", 1);
				}
			} 
			catch (throwable $e)
	    	{
	    		echo "error " .$e->getMessage();
	    	}
	    	catch (PDOException $e) 
	    	{
	    		echo "error " .$e->getCode();	
	    	}
		}
	}
?>