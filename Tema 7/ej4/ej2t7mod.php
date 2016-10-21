
<?php
	//INICIAMOS LA SESION, SI LA VARIABLE DE CONEXION EXISTE, ENTRA AL ARCHIVO, SI NO SE REDIRIGE
	if(!isset($_SESSION["conectado"])){
	
?>
<html>
<head>
	<title>Ejercicio 2 tema 7</title>
	<style>

	</style>
</head>
<body>

	<h1>Ejercicio 2</h1>
	<p>Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
	nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El
	número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
	en el cómputo. Utiliza sesiones.</p>

	<?php
	session_start(); // Inicio de sesión
		if(!isset($_SESSION['contadorimpares'])) {
			$_SESSION["contadorpares"]=0;
			$_SESSION["contadorimpares"]=0;
			$_SESSION["pares"]=0;
			$_SESSION["impares"]=0;
		}
	if(isset($_GET["numero"])){
		if($_GET["numero"]>=0){
			if(($_GET["numero"]%2)==0){
				$_SESSION["pares"]+=$_GET["numero"];
				$_SESSION["contadorpares"]++;
			}else{
				$_SESSION["impares"]+=$_GET["numero"];
				$_SESSION["contadorimpares"]++;
			}
			echo $_SESSION["contadorimpares"]." ".$_SESSION["contadorpares"];
			?>
		<form method="get">
		<input type="number" id="texto" name="numero" autofocus required>
		<input type="submit"  >
		</form>
<?php
		}else{
			?>
			<!--SALIDA-->
			<p>La media de los numeros pares es <?php echo ($_SESSION["pares"]/$_SESSION["contadorpares"]) ?></p>


			<p> La media de los numeros Impares es <?php echo ($_SESSION["impares"]/$_SESSION["contadorimpares"]) ?></p>
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