<html>
<head>
	<title>Ejercicio 8 tema 5</title>
	<style>
	table, tr, td{
		border-collapse: collapse;
		border: 1px solid black;

	}
	td{
		width: 20px;
		text-align: center;
	}
		
	</style>
</head>
<body>

	<h1>Ejercicio 8</h1>
	<p>Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
	continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para ello una
	tabla. Seguidamente el programa pasará los primos a las primeras posiciones, desplazando el resto
	de números (los que no son primos) de tal forma que no se pierda ninguno. Al final se debe mostrar
	el array resultante.</p>

	<?php

	if(isset($_GET["numero"])){
		if($_GET["contador"]==0){
			$array=$_GET["numero"];
			$contador=1;
		}else{
			$array=$_GET["array"]."-".$_GET["numero"];
			$contador=$_GET["contador"]+1;
		}




		if($contador==10){
			$numeros =explode ("-",$array);

			echo "Array Inicial <table> <tr>";
			for ($i=0;$i<(count($numeros));$i++){
				echo "				<td>".$i."</td>							";
			}
			echo "</tr><tr>";
			for ($i=0;$i<(count($numeros));$i++){
				echo "		<td>".$numeros[$i]."</td>				";
			}

			echo "</tr></table>";

			$primos=array();
			$noprimos=array();
			$total=array();

			foreach ($numeros as $n) {
				$primo=true;
				for ($i=2;$i<$n;$i++){			//Comprobamos si es primo
					if(($n%$i)==0){
						$primo=false;
					}
				}

				if($primo){			//Si es primo añadimos array de primos
					array_push($primos, $n);
				}else{				//Si no es primo añadimos al array de noprimos
					array_push($noprimos, $n);
				}
			}
			foreach ($primos as $n) {
				array_push($total,$n);
			}
			foreach ($noprimos as $n) {
				array_push($total,$n);
			}

			echo "Array Final <table> <tr>";
			for ($i=0;$i<(count($total));$i++){
				echo "				<td>".$i."</td>							";
			}
			echo "</tr><tr>";
			for ($i=0;$i<(count($total));$i++){
				echo "		<td>".$total[$i]."</td>				";
			}

			echo "</tr></table>";
		}else{
		?><form method="get">
		<input type="text" name="numero" autofocus required>
		<input type="hidden" name="array" value=<?=$array?> >
		<input type="hidden" name="contador" value=<?=$contador?> >
		<input type="submit" value="Enviar">

	</form>
	<?php
		}

	}else{
		$contador=0;
		$array=0;
		?>

		
		<form method="get">
		<input type="text" name="numero" autofocus required>
		<input type="hidden" name="array" value=<?=$array?> >
		<input type="hidden" name="contador" value=<?=$contador?> >
		<input type="submit" value="Enviar">

	</form>
	<?php
	}
	?>

	
</table>
</body>
</html>