<html>
<head>
	<title>Buenos dias!</title>
</head>
<body>

	<h1>
	<?php
	$hora= $_GET["hora"];

	if($hora>6&&$hora<=12){
		echo "Buenos dias";
	}else 
		if($hora>13&&$hora<=20){
		echo "Buenas tardes";
	}else
		 if(($hora>=21&&$hora<=24)||($hora>=1&&$hora<6)){
		echo "buenas noches";
	}else{
		echo "Error de hora";
	}
	?>
</h1>

</body>
</html>