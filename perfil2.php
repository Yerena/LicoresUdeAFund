<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Perfil Tienda Virtual</title>
		<link rel="stylesheet" href="css/perfil_style.css"/>
	</head>
<body>
<form method="POST" action="perfilmod.php" align="center">
<?php
	include 'header.php';
	try{	
	require_once __DIR__ . "/db.php";
	$state = $conn->prepare("SELECT * FROM usuario WHERE usuario=:nick");
   	$state->bindParam(":nick",$_COOKIE['usr']);
	$state->execute();
	$state->setFetchMode(PDO::FETCH_ASSOC);
	if($var = $state->fetch()){
	
	echo"Documento:".'<input name = "num_id" type="text" readonly="readonly" VALUE="'.$var['num_id'].'"><br /></input>';
	echo"Nombre:".'<input name = "nombre" type="text" VALUE="'.$var['nombre'].'"><br /></input>';
	echo"Apellido:".'<input name = "apellido" type="text"  VALUE="'.$var['apellido'].'"><br /></input>';
	echo"Fecha de nacimiento:".'<input name = "fecha_nacimiento" type="text" readonly="readonly" VALUE="'.$var['fecha_nacimiento'].'"><br /></input>';
	echo"Direccion:".'<input name = "direccion" type="text"  VALUE="'.$var['direccion'].'"><br /></input>';
	echo"Telefono:".'<input name = "telefono" type="text"  VALUE="'.$var['telefono'].'"><br /></input>';
	echo '<input type="submit" value="Modificar" name="Enviar"></input>';

	}else{
		echo "No se puede mostrar el perfil.";
	}
	}catch(PDOException $pdoe){
		echo $pdoe->getMessage();
	}
?>

</form>

</body>
</html>
