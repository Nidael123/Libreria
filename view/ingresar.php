<?php 
	$url = "http://localhost/libreria/controler/api/puente_autores.php";//cambiar por la direccion cuando este en el servidor
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$resultado = json_decode(curl_exec($ch));

	$url2 = "http://localhost/libreria/controler/api/puente_editorial.php";//cambiar por la direccion cuando este en el servidor
	$ch2 = curl_init($url2);
	curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true );
	curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
	$resultado2 = json_decode(curl_exec($ch2));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../resources/css/base.css">
	<link rel="stylesheet" href="../resources/css/ingreso.css">
	<link rel="stylesheet" href="../resources/css/aside.css">
	<title>Document</title>
</head>
	<body class="container">
		<?php 
			$index = '../index.php';
			$ingresar = null;
			$busca_libro = '../view/buscar_libro.php';
			$buscar_autor = '../view/buscar_autor.php';
			require_once "../resources/templates/nav-view.php";
		 ?>
		 <section class="section">
		 	<form action="../controler/api/puente_libros.php" class="formulario" method="post" role="form" enctype="multipart/form-data">
		 		<div class="posicion">
		 			<h1>Ingreso de libros</h1>
		 			<div class="titulo">
		 				<label for="">TITULO: </label>
				 		<input type="text" name="titulo"><br>
		 			</div>

		 			<div class="autor">
		 				<label for="">AUTOR: </label>
					 	<select name="autor">
					 		<?php 
					 			foreach ($resultado as $key) {
									echo'<option  value = "'.$key->id_autor.'">'.$key->nombre.'</option>';
									}
					 		?>
					 	</select>
		 			</div>
				 	
				 	<div class="anio">
				 		<label for="">AÑO DE EDICION: </label>
				 		<input type="date" name="anio"><br>
				 	</div>
				 	
				 	<div class="editorial">
				 		<label for="">EDITORIAL</label>
					 	<select name="editorial">
					 		<?php 
					 			foreach ($resultado2 as $key){
									echo'<option  value = "'.$key->id_editorial.'">'.$key->nombre.'</option>';
									}
					 		?>
					 	</select><br>
				 	</div>
				 	
				 	<div class="descripcion">
				 		<label for="">DESCRIPCION</label><br>
				 		<textarea cols="30" rows="10" name="descripcion"></textarea><br>
				 	</div>
				 	
				 	<label for="">PORTADA</label>
				 	<input type="file" name="imagen"><br><br><br>
				 	<button type="submit">GUARDAR</button>
			 		</div>
		 	</form>
		 </section>  <!-- solo section es el que se realiza en cada pagina-->
		 
		 <?php 
			require_once "../resources/templates/footer-view.php";
		 ?>
		 <?php 
			require_once "../resources/templates/aside-view.php";
		 ?>
	</body>
 </html>