<html>
<head>
	<title>Contador de Digitos</title>
</head>
<body>
	<h2> Tema 4 ejercicio 9</h2>
	<p>Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado.</p>


	<form method="get">
		<input type="text" name="numero"/>
		<input type="submit"/>
	</form>


	<?php
	if(isset($_GET["numero"])){
		$num=$_GET["numero"];
		$numeroDuplicado=$num;
		$cantidad=0;
		//Mientras el numero sea mayor a 0, dame la parte entera del numero partido 10
		while($num>0){
			$num=intval($num/10);
			$cantidad++;
		} 
		echo "El numero " . $numeroDuplicado ." tiene " . $cantidad . " digitos";

		}


	?>

</body>
</html>