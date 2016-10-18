<html>
<head>
	<title>Ejercicio 1 tema 5</title>
	<style>

		table, td, tr{
			border:1px solid black;
			border-collapse:collapse;
		}
		td{
			width: 50px;
			height: 50px;
		}
	</style>
</head>
<body>

	<h1>Ejercicio 1</h1>
	<p>Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
	Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben
	almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben
	almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de
	los tres arrays dispuesto en tres columnas.</p>

	<?php
	for ($i=0;$i<20;$i++){
		$numero[$i]=rand(0,100);
	}
	for($i=0;$i<20;$i++){
		$cuadrado[$i]=$numero[$i]*$numero[$i];
	}
	for($i=0;$i<20;$i++){
		$cubo[$i]=$numero[$i]*$cuadrado[$i];
	}


?>
<table>
<?php
	 for($i=0;$i<20;$i++){
	 	echo "<tr>
	 	<td>".$numero[$i]."</td>
	 	<td>".$cuadrado[$i]."</td>
	 	<td>".$cubo[$i]."</td>
	 	</tr>";
	 }

	 ?>
</table>
</body>
</html>