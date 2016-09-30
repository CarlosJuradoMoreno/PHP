<html>
<head>
	<title>Contador</title>
	<style>
	*{
		-webkit-touch-callout: none; /* iOS Safari */
		-webkit-user-select: none;   /* Chrome/Safari/Opera */
		-khtml-user-select: none;    /* Konqueror */
		-moz-user-select: none;      /* Firefox */
		-ms-user-select: none;       /* Internet Explorer/Edge */
		user-select: none;
	}
	map{
		position:relative;
	}
	img{
		z-index: 10;
	}
	#text{
	    position: absolute;
	    z-index: 30;
	    top: 100px;
	    left: 450px;
	    background: black;
	    color: red;
	    font-size: 50px;
	    font-weight: bold;
	    font-family: fuente;
	    width: 190px;
	    text-align: center;
	    background-color: transparent;
	    border: 0px;
	}
	@font-face {
	   font-family: fuente;
	   src: url(DSEG7Modern-Bold.woff);
	}
	span, #intentar{
		visibility: hidden;
	}

	</style>


	<script>
	function escribir(num){

		var valorActual = document.getElementById("text").value;
		if(valorActual.length<=3){
			document.getElementById("text").value = valorActual+num;	
		} 
		if(valorActual.length+1 == 4){
			document.getElementById("text").disabled = false;
			document.getElementById("numberSubmit").submit();

		}
	}
	</script>
</head>
<body>

	<?php
		$text = 'Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
		programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
		“Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
		satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.<br>';
		$int="";

		if(isset($_GET['user_number'])){
			$intentos = $_GET["intentos"];
			if($intentos!=0){
						
						$text = '<h3>Resultado de tu intento: </h3>';
					if($_GET['user_number'] == $_GET['my_number']){
						$text .= '<h1>Ohhhh! que máquina</h1>';
					}else{

						$text .= '<p>Ohhhh! eres un lerdo</p>';
						$int = "Te quedan ". $intentos ." intentos";
						$intentos=$intentos-1;
					}
				}else{
					//HAS PERDIDOOO
					echo "<h1>HAS PERDIDOOOO</h1>";
				}
		}else{
			$num1=rand(0,9);

			$num2=rand(0,9);
			$num3=rand(0,9);
			$num4=rand(0,9);
			$aleatorio= $num1 . $num2 . $num3 . $num4;
			$intentos=4;
		}
	?>
<h4>Ejercicio 7</h4>
	<?=$text?>
	<?=$int?>
	<form id="numberSubmit" method="get">
		<div style="position:relative; float:left;">
			<img  src="bom.png" border="0" width="798" height="427" orgWidth="798" orgHeight="427" usemap="#image-maps-2016-09-29-063028" alt="" />
			<map name="image-maps-2016-09-29-063028" id="ImageMapsCom-image-maps-2016-09-29-063028">

			<area id="boton1" shape="rect" coords="408,274,448,320" style="outline:none;" onclick="escribir(1)"/>
			<area id="boton2" shape="rect" coords="472,274,512,320" style="outline:none;" onclick="escribir(2)"/>
			<area id="boton3" shape="rect" coords="530,273,570,319" style="outline:none;" onclick="escribir(3)"/>
			<area id="boton4" shape="rect" coords="593,273,633,319" style="outline:none;" onclick="escribir(4)"/>
			<area id="boton5" shape="rect" coords="654,273,694,319" style="outline:none;" onclick="escribir(5)"/>
			<area id="boton6" shape="rect" coords="409,345,450,392" style="outline:none;" onclick="escribir(6)"/>
			<area id="boton7" shape="rect" coords="468,345,510,390" style="outline:none;" onclick="escribir(7)"/>
			<area id="boton8" shape="rect" coords="532,345,574,390" style="outline:none;" onclick="escribir(8)"/>
			<area id="boton9" shape="rect" coords="593,346,635,391" style="outline:none;" onclick="escribir(9)"/>
			<area id="boton0" shape="rect" coords="653,346,695,391" style="outline:none;" onclick="escribir(0)"/>
			<area shape="rect" coords="796,425,798,427" alt="Image Map" style="outline:none;" title="Image Map"/>
			</map>

			<input id="text" type="text" name="user_number" disabled/>
			<input type="hidden" name="my_number" value="1234"/>
			<input type="hidden" name="intentos" value= <?=$intentos?>/>

		</div>
		<span id="oculto"></span>

	</form>
</body>
</html>