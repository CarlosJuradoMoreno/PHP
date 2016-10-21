<?php
	session_start();
	if(!isset($_SESSION["conectado"])){
		
	}
?>
<html>
<head>
	<title>Ejercicio 3 tema 7 </title>
	<style>
	div{
		background-color: lightblue;
		height:100px;
		width: 500px;
		margin: 10px auto;
		text-align: center;
		padding: 100px 50px;
	}
	div input[type="text"]{
		 background-color: #3CBC8D;
    	color: white;
    	border-radius: 10px;
    	width: 60%;
	}
	div input[type="password"]{
		 background-color: #3CBC8D;
    	color: white;
    	border-radius: 10px;
    	width: 60%;
	}
	div input[type="submit"]{
		border-radius: 10px;
		margin-top: 5px;
	}
	</style>
</head>
<body>

	<h1>Ejercicio 4</h1>
	<p>Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los
	programas de la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión
	con un nombre de usuario y contraseña correctos.</p>
<?php


?>
<div>
	<form method="get">
		<input type="text" name="usuario" autofocus autocomprete="off"><br>
		<input type="password" name="pass"><br>
		<input type="submit" value="Acceder">
	</form>
</div>
	<?php
	
		$usuario="Carlos";
		$pass="Jurado";
		if(isset($_GET["usuario"])){
			
			if(($_GET["usuario"]=="Carlos")&&($_GET["pass"]=="Jurado")){
				$_SESSION["conectado"]="";
				$texto="Contraseña correcta";
				
			}else{
				$texto="Error en inicio";
			}
		}else{
			$texto="";
		}
	
	
		?>
		<p name="texto"><?=$texto?></p>
</body>
</html>