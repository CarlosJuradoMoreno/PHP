<html>
<head>
	<title>Ejercicio conversor</title>
</head>
<body>
	<?php
	$conversor=166.360;
	$pesetas=1000;
	$euros;
	$euros=$pesetas/$conversor;

	echo round($euros,$precision=2);
	?>

</body>
</html>