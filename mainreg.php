
<?php
	//ini_set("display_error", "On");
	//error_reporting(E_ALL | E_STRICT);
	try{	
	
	require_once __DIR__ . "/db.php";
	$state = $conn->prepare("INSERT INTO `usuario`(`tipo_id`, `num_id`, `rol`, `nombre`, `apellido`, `usuario`, `contrasena`, `fecha_nacimiento`, `direccion`, `telefono`)
	VALUES('$_POST[tipo_id]','$_POST[num_id]','clien','$_POST[nombre]',
	'$_POST[apellido]','$_POST[user]','$_POST[pass]','$_POST[f_n]','$_POST[dir]','$_POST[tel]')");
    
    if($_POST["Enviar"]){
    	$state->bindParam(":tipo_id",$_POST["tipo_id"]);
		$state->bindParam(":num_id",$_POST["num_id"]);
		$state->bindParam(":nombre",$_POST["nombre"]);
		$state->bindParam(":apellido",$_POST["apellido"]);
		$state->bindParam(":user",$_POST["user"]);		
		$state->bindParam(":pass",$_POST["pass"]);
		$state->bindParam(":f_n",$_POST["f_n"]);
		$state->bindParam(":dir",$_POST["dir"]);
		$state->bindParam(":tel",$_POST["tel"]);
		$res = $state->execute();
		if($res==true){
			header('Location: registrarse.php?reg=1'); 
		}else{
			header('Location: registrarse.php?reg=2');
		}
		
	}else{
		header("Location: index.html");
	}
	}catch(PDOException $pdoe){
		echo $pdoe->getMessage();
	}
?>
