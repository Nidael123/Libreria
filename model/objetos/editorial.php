<?php  
	require_once '../../controler/acciones/buscar.php';
	require_once '../../controler/acciones/guardar.php';

	class editorial
	{

		public $variable = null;

		private $id_editorial;
		private $nombre;

		public function cnst_editorial($_id, $_nombre)
		{
			$this->id_editorial = $_id;
			$this->nombre = $_nombre;
		}

		public function cnst_guardar($_nombre)
		{
			$this->nombre = $_nombre;
		}

		public function get_id(){ return ($this->id_editorial); }
		public function get_nombre(){ return ($this->nombre); }

		public function buscar_editoriales()
		{
			$variable = new busqueda();
			$variable->todas_editorial();
		}

		public function guardar_editorial()
		{
			$variable = new guardar();
			$variable->editorial_save($this->nombre);
		}
	}
?>