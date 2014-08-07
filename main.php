<?php
	//ini_set("display_error", "On");
	//error_reporting(E_ALL | E_STRICT);
	try{	
	
	require_once __DIR__ . "/db.php";
	$state = $conn->prepare("SELECT * FROM usuario WHERE usuario=:usr AND contrasena=:pass");
    
    if($_POST["Enviar"]){
    	$state->bindParam(":usr",$_POST["nombre"]);
		$state->bindParam(":pass",$_POST["pass"]);
		$state->execute();
		$state->setFetchMode(PDO::FETCH_ASSOC);
		if($var = $state->fetch()){
			//echo "Si funciono ".$var["nombre"];
			setcookie("temp",$var["rol"]);
			setcookie("usr",$var["usuario"]);
			header('Location: index.php'); 
		}else{
		  
			//header("refresh:0; url=login.php?error=1");
			echo '<script language="javascript">
			alert("usuario y/o contrasena invalidos");
			window.location.href="login.php";
			</script>'; 

			/*echo '<script language="javascript">';
			echo 'alert("usuario y/o contrasena invalidos")';
			echo '</script>';*/
		}
	}else{
		header("Location: index.html");
	}
	}catch(PDOException $pdoe){
		echo $pdoe->getMessage();
	}
?>
