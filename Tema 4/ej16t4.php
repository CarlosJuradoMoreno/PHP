<html>
<head>
	<title>Contador de Digitos</title>
</head>
<body>
	<h2> Tema 4 Ejercicio 16</h2>
	<p>	Escribe un programa que diga si un número introducido por teclado es o no primo. Un número
	primo es aquel que sólo es divisible entre él mismo y la unidad.</p>


	<form method="get">
		<input type="text" name="numero" autofocus/>
		<input type="submit"/>
		
	</form>
	<?php

	if(isset($_GET["numero"])){
		$num=$_GET["numero"];
		$primo=true;
		$i=2;
		while(($i<$num)&&($primo==true)){

			if(($num%$i)==0){
				$primo=false;
			}
			$i++;
		}

		if($primo==true){
			echo"Es primo";
		}else{
			echo "No Es primo";
		}


		} else{


		}
	?>

	


	

</body>
</html>