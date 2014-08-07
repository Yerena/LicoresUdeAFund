<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Perfil Tienda Virtual</title>
		<link rel="stylesheet" href="css/perfil_style.css"/>
	</head>
<body>
<?php
//ini_set("display_error", "On");
	//error_reporting(E_ALL | E_STRICT);
	try{	
	
	require_once __DIR__ . "/db.php";
	$state = $conn->prepare("UPDATE usuario SET nombre=:nom,apellido=:ape,direccion=:dir,telefono=:tel WHERE  num_id=:id");
    
    if($_POST["Enviar"]){
    	$state->bindParam(":id",$_POST["num_id"]);
		$state->bindParam(":nom",$_POST["nombre"]);
		$state->bindParam(":ape",$_POST["apellido"]);
		$state->bindParam(":dir",$_POST["direccion"]);
		$state->bindParam(":tel",$_POST["telefono"]);
		$res = $state->execute();
		if($res==true){
			header('Location: perfil.php?exito=1'); 
		}else{
			header('Location: perfil.php?exito=2');
		}
		
	}else{
		header("Location: index.html");
	}
	}catch(PDOException $pdoe){
		echo $pdoe->getMessage();
	}
?>


</body>
</html>
