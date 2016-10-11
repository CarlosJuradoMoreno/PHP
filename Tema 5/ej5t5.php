<html>
<head>
	<title>Ejercicio 5 tema 5</title>
	<style>
	span{
		display: inline-block;
		width: 100px;
	}

		
	</style>
</head>
<body>

	<h1>Ejercicio 5</h1>
	<p>Realiza un programa que pida la temperatura media que ha hecho en cada mes de un determinado
	año y que muestre a continuación un diagrama de barras horizontales con esos datos. Las barras
	del diagrama se pueden dibujar a base de la concatenación de una imagen.</p>



	<?php
	$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
	if(isset($_GET["Enero"])){	//Si inserta algun numero
		$temperaturas = array('Enero' => $_GET["Enero"], 'Febrero' => $_GET["Febrero"], 'Marzo' => $_GET["Marzo"],  'Abril' => $_GET["Abril"], 'Mayo' => $_GET["Mayo"], 'Junio' => $_GET["Junio"], 'Julio' => $_GET["Julio"], 'Agosto' => $_GET["Agosto"], 'Septiembre' => $_GET["Septiembre"], 'Octubre' => $_GET["Octubre"], 'Noviembre' => $_GET["Noviembre"], 'Diciembre' => $_GET["Diciembre"]);
		foreach ($meses as $value) {
			echo "<span>".$value.": </span>";
			for($i=0;$i<$temperaturas[$value];$i++){
				echo "<img src='img/cuadro.png'/>";
			}
			echo "<br>";
		}
	
	}else{
		?>
		<h3>Temperaturas medias</h3>
		<form method="get">

			Enero<input type="text" name="Enero" autofocus required/><br>
			Febrero<input type="text" name="Febrero" autofocus required/><br>
			Marzo<input type="text" name="Marzo" autofocus required/><br>
			Abril<input type="text" name="Abril" autofocus required/><br>
			Mayo<input type="text" name="Mayo" autofocus required/><br>
			Junio<input type="text" name="Junio" autofocus required/><br>
			Julio<input type="text" name="Julio" autofocus required/><br>
			Agosto<input type="text" name="Agosto" autofocus required/><br>
			Septiembre<input type="text" name="Septiembre" autofocus required/><br>
			Ocutubre<input type="text" name="Octubre" autofocus required/><br>
			Noviembre<input type="text" name="Noviembre" autofocus required/><br>
			Diciembre<input type="text" name="Diciembre" autofocus required/><br>
			<input type="submit"/>
		</form>




		<?php
	}

	?>

	

</table>
</body>
</html>