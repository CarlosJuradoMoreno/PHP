<html>
<head>
	<title>Piramide</title>
</head>
<body>
	<h2> Tema 4 Ejercicio 20</h2>
	<p>	Igual que el ejercicio anterior pero esta vez se debe pintar una pirámide hueca.</p>


	<form method="get">
		<input type="text" name="numero" autofocus/>
		<input type="submit" name="Construir"/>
		  <select id="elem" name="elem">
		    <option >*</option>
		    <option >+</option>
		    <option >-</option>
		    <option >Ç</option>
		    <option >#</option>
		  </select>
</form>
		
<!--Stackoverflow-->
	<center>
	<?php
	if(isset($_GET["numero"])){
		$n = $i = $_GET["numero"];
		$simbolo=$_GET["elem"];

		for($i=1;$i<=$n;$i++){
	        for($j=1;$j<=$i;$j++){
	                    echo $simbolo;
	        }
	        echo "<br />";
	    }
	}
	?>
</center>

</body>
</html>