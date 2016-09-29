<html>
<head>
	<title>Ecuacion</title>
</head>
<body>

	<?php
	$a= $_GET["a"];
	$b= $_GET["b"];
	
	if($a==0){
		echo "<strong>A</strong> debe ser distinto de 0";
	}else{
		$x= (-$b)/$a;
		echo "El resultado de la ecuacion es " . $x;
	}
	?>


</body>
</html>