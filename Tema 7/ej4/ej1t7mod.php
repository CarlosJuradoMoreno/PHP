<?php

if(isset($_SESSION["conectado"])){
	
		
	


?>

<html>
<head>
	<title>Ejercicio 1 tema 7</title>
	<style>

	</style>
</head>
<body>

	<h1>Ejercicio 1</h1>
	<p>Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
	teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
	terminado de introducir los datos cuando meta un número negativo. Utiliza sesiones.</p>

	<?php
	session_start(); // Inicio de sesión
		if(!isset($_SESSION['contador'])) {
			$_SESSION["contador"]=0;
			$_SESSION["acumulado"]=0;
		}
	if(isset($_GET["numero"])){
		if($_GET["numero"]>=0){
			$_SESSION["acumulado"]+=$_GET["numero"];
			$_SESSION["contador"]++;
			?>
		<form method="get">
		<input type="number" id="texto" name="numero" autofocus required>
		<input type="submit"  >
		</form>
<?php
		}else{
			?>
			<p>La media es<?php echo " ".$_SESSION["acumulado"]/$_SESSION["contador"]	?>
			</p>
			<?php	
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

<?php
}else{
	header('Location: ../ej4t7.php');
}


?>