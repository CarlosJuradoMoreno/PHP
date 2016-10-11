<html>
<head>
	<title>Ejercicio 6 tema 5</title>
	<style>
	span{
		font-weight: bold;
		font-size: 20px;
	}
	.par{
		color:red;
	}
	.impar{
		color:green;
	}
		
	</style>
</head>
<body>

	<h1>Ejercicio 6</h1>
	<p>Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los
	pares de un color y los impares de otro</p>



	<?php
	
	if(isset($_GET["numero"])){	//Si inserta algun numero
		if($_GET["contador"]==7){		

			$array=$_GET["array"]."-".$_GET["numero"]	;
			$numeros =explode ("-", $array);
			foreach ($numeros as $n) {
				if(($n%2)==0){
					echo "<span class='par'>".$n."</span>";
				}else{
					echo "<span class='impar'>".$n."</span>";
				}
			}
			
		}else if($_GET["contador"]==0){
				$array=$_GET["numero"];
				$contador=$_GET["contador"]+1;
				
			}else{
			$array=$_GET["array"]."-".$_GET["numero"]	;			
			$contador=$_GET["contador"]+1;
		}

	}else{		//Primera ejecucion del programa
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