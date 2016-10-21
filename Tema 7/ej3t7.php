<html>
<head>
	<title>Ejercicio 3 tema 7 </title>
	<style>

	</style>
</head>
<body>

	<h1>Ejercicio 3</h1>
	<p>Escribe un programa que permita ir introduciendo una serie indeterminada de números mientras
	su suma no supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
	el contador de los números introducidos y la media. Utiliza sesiones.</p>

	<?php
	session_start(); // Inicio de sesión
		if(!isset($_SESSION['total'])) {
			$_SESSION["total"]=0;
			$_SESSION["contador"]=0;
			
		}

	if(isset($_GET["numero"])){
		$_SESSION["total"]+=$_GET["numero"];
			$_SESSION["contador"]++;
		if($_SESSION["total"]<10000){
			
			?>
		<form method="get">
		<input type="number" id="texto" name="numero" autofocus required>
		<input type="submit"  >
		</form>
	<?php
		}else{
			
			echo "<p>Total acumulado:".$_SESSION['total']."  </p>";
			echo "<p>Contador:".$_SESSION['contador']."  </p>";
			echo "<p>Media:".($_SESSION['total']/$_SESSION['contador'])."  </p>";

	}	
	}else{
		?>

		<form method="get">
	<input type="number" id="texto" name="numero" autofocus required>
	<input type="submit" name="Enviar">
	</form>

		<?php
	}
?>
</body>
</html>