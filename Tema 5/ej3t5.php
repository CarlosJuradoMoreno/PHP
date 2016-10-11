<html>
<head>
	<title>Ejercicio 3 tema 5</title>
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

	<h1>Ejercicio 3</h1>
	<p>Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
	elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
	la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
	muestra el contenido del array.</p>

	<?php
	if(isset($_GET["numero"])){	//Si inserta algun numero
		if($_GET["contador"]==14){		//Cuando inserta lo 10 numeros

			$array=$_GET["array"]."-".$_GET["numero"]	;
			$numeros =explode ("-", $array);
			$ultimo=$numeros[14];
			

			for ($i=14;$i>0;$i--){
				$numeros[$i]=$numeros[($i-1)];
			}
			$numeros[0]=$ultimo;
			foreach ($numeros as $n) {
				echo $n. " ";
			}
			
			
		}else if($_GET["contador"]==0){
				$array=$_GET["numero"];
				$contador=$_GET["contador"]+1;
				
			}else{
			$array=$_GET["array"]."-".$_GET["numero"]	;			//Cadena de caracteres normal
			$contador=$_GET["contador"]+1;
		}

}
	else{		//Primera ejecucion del programa
		$array="";
		$contador=0;
	}

	?>


	<form method="get">

		<input type="text" name="numero" autofocus required/>
		<input type="submit"/>
		<input type="hidden" name="contador" value="<?=$contador?>"/>
		<input type="hidden" name="array" value="<?=$array?>"/>
	</form>


</table>
</body>
</html>