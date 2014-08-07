
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
  <head>
	<title>Empresita S.A.</title>
	<!--<link rel="stylesheet" href="style_lg.css">-->
	<script src="js/jquery-1.2.6.min.js" type="text/javascript"></script>
	<!--<link rel="stylesheet" href="css/style_rg.css"/>-->


  </head>
<body>
<?php
		include 'header.php';
		
	?>
	
	
  
    	
	<form action="mainreg.php" method="post" align="center" >
		<select  name = "tipo_id">
		  <option value="Cedula de Ciudadania" >Cedula de Ciudadania</option>
		  <option value="Cedula de Extranjeria">Cedula de Extranjeria</option>
		  <option value="Registro Civil">Registro Civil</option>
		</select>
		<p>Numero de Identificacion: <input name = "num_id" type="text"   /></p>
		<!--<p>Rol: <input name = "rol" type="text"   /></p>-->
		<p>Nombre: <input name = "nombre" type="text"   /></p>
		<p>Apellido: <input name = "apellido" type="text"   /></p>		
		<p>Usuario: <input name = "user" type="text"   /></p>
		<p >Password: <input name = "pass" type="password"/></p>
		<p >Fecha de Nacimiento: <input name = "f_n" type="date"/></p>
		<p>Direccion: <input name = "dir" type="text"   /></p>
		<p>Telefono: <input name = "tel" type="text"   /></p>
		
		<button name = "Enviar" value="Ingresar" type="submit" />Registrarse</button>

		<?php
			if($_GET["reg"]==1){
				echo "Registro exitoso!";
			}
			if($_GET["reg"]==2){
				echo "Error al crear registro";
			}
		?>
		</p>
	</form>

  
</body>
</html>
