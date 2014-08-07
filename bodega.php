
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
  <head>
    </head>
<body>
<?php
	include 'header.php';
?>	
<form action="mainbod.php" method="post">
		<p>Codigo del Licor: <input name = "cod_licor" type="text"   />
		<button name = "Enviar" value="Buscar" type="submit"  />Buscar</button>
		</p>
	</form>
	<form action="reglicor.php" method="post">
		<button name = "Enviar" value="Ingresar Licor" type="submit"  />Ingresar Licor</button>
		</p>
	</form>
	</body>
	</html>