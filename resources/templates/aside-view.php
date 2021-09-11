<?php 

	$url = "http://localhost/Libreria/controler/api/puente_libros.php";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$resultado = json_decode(curl_exec($ch));
?>
<aside class="aside">

	<?php
		foreach (array_slice($resultado,0,2) as $key ) {
			echo '<div class = "mas_visto">
					<img class = "form_image" src="'.$key->image.'" alt="" width="300" height="200"></ >
					<h2>'.$key->image.'</h2>
				</div>';
		}
	?>	
</aside>