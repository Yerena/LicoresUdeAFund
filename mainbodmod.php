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
	$state = $conn->prepare("UPDATE licor SET precio=:pre,existencias=:exi WHERE  cod_licor=:cod");
    if($_POST["Enviar"]){
		$existencias = $_POST["existencias"] + $_POST["n_existencias"];
		$state->bindParam(":cod",$_POST["cod_licor"]);		
    	$state->bindParam(":pre",$_POST["precio"]);
		$state->bindParam(":exi",$existencias);
		$res = $state->execute();
		if($res==true){
			header('Location: mainbod.php?exito=1'); 
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