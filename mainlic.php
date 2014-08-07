
<?php
	//ini_set("display_error", "On");
	//error_reporting(E_ALL | E_STRICT);
	try{	
	
	require_once __DIR__ . "/db.php";
	$state = $conn->prepare("INSERT INTO `licor`(`cod_licor`, `nombre`, `fabricante`, `precio`, `presentacion`, `existencias`, `anejamiento`, `nacionalidad`, `grados_alcohol`)
	VALUES('$_POST[cod_licor]','$_POST[nombre]','$_POST[fabricante]',
	'$_POST[precio]','$_POST[presentacion]','$_POST[existencias]','$_POST[anejamiento]','$_POST[nacionalidad]','$_POST[grados_alcohol]')");
    
    if($_POST["Enviar"]){
    	$state->bindParam(":cod_licor",$_POST["cod_licor"]);
		$state->bindParam(":nombre",$_POST["nombre"]);
		$state->bindParam(":fabricante",$_POST["fabricante"]);
		$state->bindParam(":precio",$_POST["precio"]);
		$state->bindParam(":presentacion",$_POST["presentacion"]);		
		$state->bindParam(":existencias",$_POST["existencias"]);
		$state->bindParam(":anejamiento",$_POST["anejamiento"]);
		$state->bindParam(":nacionalidad",$_POST["nacionalidad"]);
		$state->bindParam(":grados_alcohol",$_POST["grados_alcohol"]);
		$res = $state->execute();
		if($res==true){
			//echo "Si funciono ".$var["nombre"];
			setcookie("temp",$var["rol"]);
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