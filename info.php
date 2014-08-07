<html>
	<head>
		<title>Empresita S.A.</title>
		<link rel="stylesheet" href="css/form_style.css"/>
		<script> 
			function validar() { 
			if(pedido.Num_Id == "") { alert('Debes poner un nombre de licor') ; return false ; } 
			} 
		</script> 
	</head>
	<body>
	<?php
		include 'pestanas.html';
	?>
	<div id="form">
	<form name="pedido" action="main.php" method="post" align="center" onsubmit="return validar()">
			Consulta de Usuarios:<br>				  
					<select>
						  <option value="CC" >Cedula de Ciudadania</option>
						  <option value="CE">Cedula de Extranjeria</option>
						  <option value="RC">Registro Civil</option>
					</select><br> <br>
					<input type="text" name="Num_Id"  placeholder="Numero de Identificacion" size="30" > <br> <br>				
					<input type="button" value="Consultar Usuario"><br> <br><br> <br>
					Consulta de Licor:<br>				  
					<input type="text" name="Cod_Licor"  placeholder="Codigo del Licor" size="30" > <br> <br>				
					<input type="button" value="Consultar Usuario">
			
	</form>
	</div>
	<?php
	
	
		
	?>
	</body>
</html>