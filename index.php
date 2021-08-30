<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="resources/css/base.css">
	<link rel="stylesheet" href="resources/css/index.css">
	<link rel="stylesheet" href="resources/css/aside.css">
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
			//select (select nombre FROM autores where id_autor = 1) as id_libro from libro;
		 ?>

		 <section class="section">
		 	<div class="book">
		 		<div class="title">
		 			<h2>titulo del libro</h2>
		 		</div>
		 		
		 		<div class="image">
					<img src="resources/image/logo.jpg" width="300px" height="200px" alt="">
		 		</div>
		 		
		 		<div class="texto">
		 			<div class="info">
		 				<p><b>Autor: </b> concatenar</p>
		 				<p><b>Año: </b> concatenar</p>
		 				<p><b>Editorial: </b> concatenar</p> 
		 				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus asperiores, sint. Nam illum vero, a. Eaque nam velit, enim aliquam provident repudiandae architecto tenetur nihil aspernatur, cum molestias aliquid, similique. Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Deleniti officia laboriosam ab molestias ratione? Laudantium, natus eaque labore illum reiciendis! Laborum nisi consequatur blanditiis, explicabo dicta quasi similique, recusandae totam. lorem</p>
		 			</div>
		 		</div>

		 		<div class="reference">
		 			<div class="cuadro">Vistas <div class="data">5</div></div>
		 			<div class="cuadro">Estado <div class="data">56</div></div>
		 			<div class="cuadro"></div>
		 		</div>
		 	</div>

		 	<?php  
		 		foreach ($resultado as $key) {
		 			echo '<div class="book">
						 		<div class="title"> <h2>'.
						 			$key->titulo
						 		.'</h2></div>
						 		<div class = "image">
						 			<img class = "form_image" src="'.$key->image.'" alt="" width="300" height="200"></ >
						 		</div>
						 		<div class="texto">
						 			<div class="info">
		 								<p><b>Autor: </b>'.$key->autor.'</p>
		 								<p><b>Año: </b>'.$key->anio.'</p>
		 								<p><b>Editorial: </b>'.$key->editorial.'</p> 
		 								<p>'.$key->descripcion.'</p>
		 							</div>
						 		</div>
						 		<div class="reference">
		 							<div class="cuadro">Vistas <div class="data">55</div></div>
		 							<div class="cuadro">Estado <div class="data">50</div></div>
		 							<div class="cuadro"></div>
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