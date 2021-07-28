<?php
	class coneccion
	{
		private $host = 'localhost';  
	    private $db = 'libreria';
	    private $user = 'root';
	    private $password = '';
	    private $charset = 'utf8mb4';
	    private $cadena_coneccion;
	    private $opciones = null;

	    public function conectar()
	    {
	    	$opciones = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
	    	$this->cadena_coneccion = "mysql:host=".$this->host.";dbname=".$this->db;
	    	try 
	    	{
	    		$pdo = new PDO($this->cadena_coneccion,$this->user,$this->password, $opciones);
	    		return($pdo);
	    	}
	    	catch (PDOException $e) 
	    	{
	    		$m_error = $this->manager_error();
	    		return ($m_error);
	    	}
	    }

	    public function desconectar()
	    {
	    	///falta la funcion para desconectar
	    }
	    public function manager_error()
	    {
	    	$errores = array(1,'Error de conexion a la base de datos');
	    	return ($errores);
	    }
	}

	/*$bd = new coneccion();
	$valor =  $bd->conectar();

		if($valor[1] != 1)
		{
			echo "algo paso";
		}

	print_r( $bd->conectar());*/

	
?>