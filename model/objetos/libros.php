<?php  
	
	require_once '../../controler/acciones/guardar.php';
	require_once '../../controler/acciones/actualizar.php';
	require_once '../../controler/acciones/buscar.php';

	class libro
	{
		public $variable = null;

		private $id_libro = null;//int
		private $titulo = null;
		private $editorial = null;//int
		private $anio = null; //fecha
		private $autor = null;//int
		private $image = null;
		private $estado = null;//int

		public function cntr_ingreso($_titulo, $_editorial, $_anio, $_autor, $_image)
		{
			$this->titulo = $_titulo;
			$this->editorial = $_editorial;
			$this->anio = $_anio;
			$this->autor = $_autor;
			$this->image = $_image;
		}
		public function cnts_busqueda($_id_libro, $_titulo, $_editorial, $_anio, $_autor, $_image)
		{
			$this->titulo = $_titulo;
			$this->editorial = $_editorial;
			$this->anio = $_anio;
			$this->autor = $_autor;
			$this->image = $_image;
			$this->id_libro = $_id_libro;
		}

		public function guardar_libro()
		{
			$variable = new guardar();
			$variable->libro_save($this->titulo, $this->editorial, $this->anio, $this->autor, $this->image);	
		}

		public function buscar_libros()
		{
			$variable = new busqueda();
			$variable->todos_libros();
		}
		public function get_id_libro(){return($this->id_libro);}
		public function get_titulo(){return($this->titulo);}
		public function get_editorial(){return($this->editorial);}
		public function get_anio(){return($this->anio);}
		public function get_autor(){return($this->autor);}
		public function get_image(){return($this->image);}
	}
?>