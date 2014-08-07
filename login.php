
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
  <head>
	<title>Empresita S.A.</title>
	<script src="js/jquery-1.2.6.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/popup_style.css"/>
	<link rel="stylesheet" href="css/style_lg.css"/>

<script type="text/javascript">
//Configuramos el evento de carga de p�gina, se ejecuta solamente 1 vez cuando la p�gina cargo por completo
$(document).ready(function(){
  centraVentana();
  muestraVentana();
  //Agregamos el evento "click" del div: ventanaPopup1Cerrar
  $("#ventanaPopup1Cerrar").click(function(){
    ocultaVentana();
  });
  //Agregamos el evento "click" del div: ventanaPopup1Fondo
  $("#ventanaPopup1Fondo").click(function(){
    ocultaVentana();
  });
});

function centraVentana() {
	//Obtenemos ancho y alto del navegador, y alto y ancho de la popUp
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#ventanaPopup1").height();
	var popupWidth = $("#ventanaPopup1").width();
	//centering
	$("#ventanaPopup1").css({
		"position": "absolute",
		"top": windowHeight/2-popupHeight/2,
		"left": windowWidth/2-popupWidth/2
	});

	//Solo se necesita para IE6
	$("#ventanaPopup1Fondo").css({
		"height": windowHeight
	});
}

function ocultaVentana() {
	$("#ventanaPopup1Fondo").fadeOut("slow");
	$("#ventanaPopup1").fadeOut("slow");
}

function muestraVentana() {
	$("#ventanaPopup1Fondo").css({
		"opacity": "0.7"
	});
	$("#ventanaPopup1Fondo").fadeIn("slow");
	$("#ventanaPopup1").fadeIn("slow");
}
</script>
  </head>
<body>
<?php
	include 'index.php';
?>
	
	
  <div id="ventanaPopup1" >
    <a id="ventanaPopup1Cerrar">x</a>
    	
	<form action="main.php" method="post" class="login">
		<p>Nickname: <input name = "nombre" type="text" id="nombre"  /></p>
		<p >Password: <input name = "pass" type="password"id="pass" /></p>
		<p class="login-submit"><button name = "Enviar" value="Ingresar" type="submit"  class="login-button"/>Login</button>
		</p>
	</form>
  </div>
  <div id="ventanaPopup1Fondo"></div>
  
</body>
</html>
