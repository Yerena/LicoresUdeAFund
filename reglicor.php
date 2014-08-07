
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
  <head>
	<title>Empresita S.A.</title>
	<!--<link rel="stylesheet" href="style_lg.css">-->
	<script src="http://jqueryjs.googlecode.com/files/jquery-1.2.6.min.js" type="text/javascript"></script>
	<!--<link rel="stylesheet" href="css/style_rg.css"/>-->


  </head>
<body>
<?php
		include 'header.php';
		
	?>
	
	
  
    	
	<form action="mainlic.php" method="post" align="center" >
		<p>Codigo del Licor: <input name = "cod_licor" type="text"   /></p>
		<p>Nombre: <input name = "nombre" type="text"   /></p>
		<p>Fabricante: <input name = "fabricante" type="text"   /></p>		
		<p>Precio <input name = "precio" type="text"   /></p>
		<p >Presentacion: <input name = "presentacion" type="text"/></p>
		<p >Existencias: <input name = "existencias" type="text"/></p>
		<p>Anejamiento: <input name = "anejamiento" type="text"   /></p>
		<p>Nacionalidad: <input name = "nacionalidad" type="text"   /></p>
		<p>Grados de Alcohol: <input name = "grados_alcohol" type="text"   /></p>
		
		<button name = "Enviar" value="Ingresar" type="submit" />Registrar Licor</button>
		</p>
	</form>

  
</body>
</html>
