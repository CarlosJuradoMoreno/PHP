<html>
<head>
	<title>Horoscopo</title>
</head>
<body>
	<h4>Ejercicio 10</h4>
	<p>Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento.</p>

	<form method="get" action="ej10t3.php">
		dia= <input type="text" name="dia">
		mes= <input type="text" name="mes">(Numero)
		<input type="submit">
	</form>

	<?php
	if(isset($_GET["mes"])){
		$d=$_GET["dia"];
		$m=$_GET["mes"];
		if($d<31|| $m<12){
			if(($m==1&&$d>=20)||($m==2&&d<18)){
				echo "Eres acuario";
			}else if(($m==2&&$d>18)||($m==3&&$d<=20)){
				echo "Eres Piscis";
			}else if(($m==3&&$d>21)||($m==4&&$d<=20)){
				echo "Eres Aries";
			}else if (($m==4&&$d>20)||($m==5&&$d<=20)){
				echo "Eres tauro";
			}else if (($m==5&&$d>20)||($m==6&&$d<=20)){
				echo "Eres Geminis";
			}else if(($m==6&&$d>20)||($m==7&&$d<=20)){
				echo "Eres Cancer";
			}else if (($m==7&&$d>20)||($m==8&&$d<=20)){
				echo "Eres leo";
			}else if (($m==8&&$d>20)||($m==9&&$d<=20)){
				echo "eres Virgo";
			}else if (($m==9&&$d>20)||($m==10&&$d<=20)){
				echo "eres libra";
			}else if (($m==10&&$d>20)||($m==11&&$d<=20)){
				echo "eres escorpio";
			}else if (($m==11&&$d>20)||($m==12&&$d<=20)){
				echo "eres Sagitario";
			}else if (($m==12&&$d>20)||($m==1&&$d<=20)){
				echo "eres Capricornio";
			}
		}else{
			echo "Inserte datos correctos";
		}
	}
	?>
</body>
</html>


</body>
</html>