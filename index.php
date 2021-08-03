<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="resources/css/base.css">
	<link rel="stylesheet" href="resources/css/index.css">
	<title>Document</title>
</head>
	<body class="container">
		<?php 
			$index = null;
			$ingresar = 'view/ingresar.php';
			$busca_libro = 'view/buscar_libro.php';
			$buscar_autor = 'view/buscar_autor.php';
			require_once "resources/templates/nav-view.php";
			$url = "http://localhost/Libreria/controler/api/puente_libros.php";
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$resultado = json_decode(curl_exec($ch));
		 ?>

		 <section class="section">
		 	<?php  
		 		foreach ($resultado as $key) {
		 			echo '<div class="book">
						 		<div class="title">'.
						 			$key->titulo
						 		.'</div>
						 		<div class = "image">
						 			<img class = "form_image" src="'.$key->image.'" alt="">
						 		</div>
						 	</div>';
		 		}
		 	?>
		 </section>  <!-- solo section es el que se realiza en cada pagina-->
		 
		 <?php 
			require_once "resources/templates/footer-view.php";
		 ?>
		 <?php 
			require_once "resources/templates/aside-view.php";
		 ?>
	</body>
 </html>