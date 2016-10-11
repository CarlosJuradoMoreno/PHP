<html>
<head>
	<title>Ejercicio 7 tema 5</title>
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

	<h1>Ejercicio 7</h1>
	<p>Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en
	un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del
	array (del 0 en adelante) y todos los números impares a las celdas restantes. Utiliza arrays auxiliares
	si es necesario.</p>

	<?php

		echo "<h2>Todos</h2><br>";
	for ($i=0;$i<200;$i++){
		$num=rand(0,20);
		if($i==0){
			$array=$num;
		}else{
			$array.="-".$num;
		}
		echo $num." ";
		}
		
		$numeros =explode ("-",$array);

		$primos=array();
		$noprimos=array();

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
	echo "<br><br><h2> Primos</h2><br>";
	foreach ($primos as $n) {
		echo $n." ";
	}
	echo "<br><br><h2> noPrimos</h2><br>";
	foreach ($noprimos as $n) {
		echo $n." ";
	}
	?>

</table>
</body>
</html>