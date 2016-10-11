<html>
<head>
	<title>Ejercicio 4 tema 5</title>
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

	<h1>Ejercicio 4</h1>
	<p>Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
	separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación
	cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
	Los números que se han cambiado deben aparecer resaltados de un color diferente.</p>



	<?php
	
	if(isset($_GET["numero"])){	//Si inserta algun numero
		$numeros =explode ("-", $_GET["array"]);

		foreach ($numeros as $n) {

			if($n==$_GET["numero"]){
				echo $_GET["numero2"];
			}else{
				echo $n;
			}
			echo " ";
		}
		
	}else{
		$array;
	for ($i=0;$i<200;$i++){
		$num=rand(0,20);
		if($i==0){
			$array=$num;
		}else{
			$array.="-".$num;
		}
		echo $num." ";
	}

	}

	?>


	<form method="get">

		Numero que quiere cambiar: <input type="text" name="numero" autofocus required/><br>
		Numero por el que lo quiere cambiar<input type="text" name="numero2" autofocus required/><br>
		<input type="submit"/>
		<input type="hidden" name="array" value="<?=$array?>"/>
	</form>


</table>
</body>
</html>