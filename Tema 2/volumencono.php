<html>
<head>
	<title>Volumen Cono</title>
</head>
<body>
	<?php
	$radio= $_GET['radio'];
	$altura= $_GET['altura'];
	$volumen= round(((1/3)*pi()*$radio*$altura*$radio),2);

	echo "El volumen del cono es: " . 	$volumen;


	?>
</body>
</html>