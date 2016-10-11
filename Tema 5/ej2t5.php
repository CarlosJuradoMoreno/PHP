<html>
<head>
	<title>Ejercicio 2 tema 5</title>
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

	<h1>Ejercicio 2</h1>
	<p>Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos
	junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.</p>

	<?php
	if(isset($_GET["numero"])){	//Si inserta algun numero
		if($_GET["contador"]==9){		//Cuando inserta lo 10 numeros

			$array=$_GET["array"]."-".$_GET["numero"]	;
			$numeros =explode ("-", $array);
			$max=0;
			$min=1000;
			foreach ($numeros as $n){
				if($n>$max){
					$max=$n;
				}else if($n<$min){
					$min=$n;
				}
			}

			foreach ($numeros as $n) {
				if($n==$max){
					echo $n." Maximo";
				} else if ($n==$min){
					echo $n." Minimo";
				}else{
					echo $n;
				}
				echo " ";
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