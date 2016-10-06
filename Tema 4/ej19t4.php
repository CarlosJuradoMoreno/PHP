<html>
<head>
	<title>Piramide</title>
</head>
<body>
	<h2> Tema 4 Ejercicio 19</h2>
	<p>	Realiza un programa que pinte una pirámide por pantalla. La altura se debe pedir por teclado
	mediante un formulario. La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen
	de las 5 que se deben dar a elegir mediante un formulario.</p>


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