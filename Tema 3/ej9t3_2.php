<html>
<head>
	<title>Ecuacion 2</title>
</head>
<body>
	<?php
	 $a= $_GET["a"];
	 $b= $_GET["b"];
	 $c= $_GET["c"];

	 $b2=($b*$b);
	 $ac=4*$a*$c;

	 if($b2<$ac){
	 	echo "Fallo, numero irracional";
	 }else{
	 	$x1=((-$b)+sqrt($b2-$ac))/(2*$a);
	 	$x2=((-$b)-sqrt($b2-$ac))/(2*$a);
	 	echo "x1= ".$x1. "<br>";
	 	echo "x2= ".$x2."<br>";
	 		 }


	?>

</body>
</html>