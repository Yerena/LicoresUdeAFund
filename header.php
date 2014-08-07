<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/header_style.css"/>
	</head>
	<body>
		<IMG SRC = "img/banner.jpg" WIDTH="100%">
		<ul id="menu">
			<?php
			if(isset($_COOKIE["temp"])){
				if($_COOKIE["temp"]==admin){
					echo '<li class="ad"><a href="#">Administrar Empleados</a></li>
					<li class="ad"><a href="bodega.php">Bodega</a></li>
					<li class="ad"><a href="perfil.php">Perfil</a></li>
					<li class="ad"><a href="logout.php">Salir</a></li>';
				}
				if($_COOKIE["temp"]==empl){
					echo '<li class="ep"><a href="bodega.php">Bodega</a></li>
					<li class="ep"><a href="perfil.php">Perfil</a></li>
					<li class="ep"><a href="logout.php">Salir</a></li>';
				}
				if($_COOKIE["temp"]==clien){
					echo
					'<li class="cl"><a href="index.php">Productos</a>
					<ul id="submenu">
            					<li><a href="cervezas.php">Cervezas</a></li>
            					<li><a href="vinos_cream.php">Vinos y Creams</a></li>
           					<li><a href="espirituosos.php">Bebidas Espirituosas</a></li>
            				</ul>
					</li>
					<li class="cl"><a href="contacto.php">Contacto</a></li>
					<li class="cl"><a href="carrito.php">Carrito</a>
					<li class="cl"><a href="perfil.php">Perfil</a></li>
					<li class="cl"><a href="logout.php">Salir</a></li>';
				}
			}else{
				echo
				'<li class="cl"><a href="index.php">Productos</a>
				<ul id="submenu">
           					<li><a href="cervezas.php">Cervezas</a></li>
           					<li><a href="vinos_cream.php">Vinos y Creams</a></li>
          					<li><a href="espirituosos.php">Bebidas Espirituosas</a></li>
           			</ul>
				</li>
				<li class="sc"><a href="contacto.php">Contacto</a></li>
				<li class="sc"><a href="login.php">Log in</a></li>
				<li class="sc"><a href="registrarse.php">Registrarse</a></li>';
				}
			?>
			
		</ul>
	</body>
</html>

