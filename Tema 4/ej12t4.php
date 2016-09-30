<html>
<head>
	<title>Contador de Digitos</title>
</head>
<body>
	<h2> Tema 4 ejercicio 12</h2>
	<p>Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. El primer término
	de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos anteriores, por lo
	que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144… El número n se debe
	introducir por teclado.</p>

<?php
	if(isset($_GET["numero"])){
		$n=$_GET["numero"];
		$cont=0;
		$salida="";
		$num1=0;
		$num2=1;
		$res;
		do{
			$res=0;
			if($cont==0){
				$salida.="0, ";
				$cont+=1;
			
			}else if($cont==1){
				$salida.="1";
				$cont+=1;
			
			}else {
			$res=$num1+$num2;
			$num1=$num2;
			$num2=$res;
			$salida.=", ".$res;
			$cont+=1;
		}
		}while ($n!=$cont);
			echo $salida;
		}
	?>


	<form method="get">
		<input type="text" name="numero"/>
		<input type="submit"/>
	</form>

	
</body>
</html>