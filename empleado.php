<html>
	<head>
		<title>Empresita S.A.</title>
		<link rel="stylesheet" href="index_style.css"/>
		<IMG SRC = "/Proyecto/banner.jpg">
		<script> 
			function validar() { 
			if(compra.NombreLicor == "") { alert('Debes poner un nombre de licor') ; return false ; } 
			} 
		</script> 
	</head>
	<body>
	<?php
	
	include 'main.php';
	echo "Si funciono ".$var["Rol"];
		
	?>
	<ul id="menu">
			<li>Bodega</li>
			<li>Perfil</li>
			<li><a href="index.html">Log out</a></li>
		</ul>
	
	</body>
</html>