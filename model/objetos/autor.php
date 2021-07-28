<?php  	
	require_once '../../controler/acciones/buscar.php';
	require_once '../../controler/acciones/guardar.php';

	class autor
	{
		private $id;
		private $nombre;

		public $variable = null;

		public function cnts_busqueda($_id, $_nombre)
		{
			$this->id = $_id;
			$this->nombre = $_nombre;
		}

		public function cntr_ingreso($_nombre)
		{
			$this->nombre = $_nombre;
		}

		public function buscar()
		{
			$variable = new busqueda();
			$variable->todos_autores();
			$variable = null;
		}

		public function ingresar()
		{
			$variable = new guardar();
			$variable->autor_save($this->nombre);
		}

		public function get_nombre(){ return($this->nombre); }
		public function get_id(){ return($this->id); }
	}
?>