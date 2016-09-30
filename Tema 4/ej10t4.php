<html>
<head>
	<title>Contador de Digitos</title>
</head>
<body>
	<h2> Tema 4 Ejercicio 10</h2>
	<p>Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
	teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
	terminado de introducir los datos cuando meta un número negativo.</p>
	<?php
	if(isset($_GET["numero"])){
		$suma=$_GET["suma"];
		$contador=$_GET["contador"];
		if($_GET["numero"]<0){
			echo "La media de la suma es " .($suma/$contador);
			}else{
				$suma=$suma+$_GET["numero"];
				$contador+=1;
			}
		} else{
			$contador=0;
			$suma=0;
			$anterior=0;
		}
	?>

	<form method="get">
		<input type="text" name="numero" autofocus/>
		<input type="submit"/>
		<input hidden name="contador" value=<?=$contador?>/>
		<input hidden name="suma" value=<?=$suma?>/>


	</form>


	

</body>
</html>