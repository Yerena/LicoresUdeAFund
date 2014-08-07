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
	$state = $conn->prepare("update usuario
						 set nombre=:nom ,
						 set apellido=:ape,
						 set direccion=:dir,
						 set telefono=:tel
                         where  num_id=:id");
    
    if($_POST["Enviar"]){
    	$state->bindParam(":id",$_POST["num_id"]);
		$state->bindParam(":nom",$_POST["nombre"]);
		$state->bindParam(":ape",$_POST["apellido"]);
		$state->bindParam(":dir",$_POST["direccion"]);
		$state->bindParam(":tel",$_POST["telefono"]);
		$state->execute();
		$state->setFetchMode(PDO::FETCH_ASSOC);
		if($var = $state->fetch()){
			//echo "Si funciono ".$var["nombre"];
			setcookie("temp",$var["rol"]);
			setcookie("usr",$var["usuario"]);
			header('Location: index.php'); 
		}else{
			header("refresh:0; url=login.php?error=1");
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
