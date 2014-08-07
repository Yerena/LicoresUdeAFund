<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/perfil_style.css"/>
	</head>
<body>
<?php
	include 'header.php';
	try{	
		require_once __DIR__ . "/db.php";
		$state = $conn->prepare("SELECT * FROM licor WHERE cod_licor= 'unicoVega'");
	   	$state->execute();
		$state->setFetchMode(PDO::FETCH_ASSOC);
		if($var = $state->fetch()){
			echo"Nombre: ".$var['nombre']."<br />";
			echo"Fabricante: ".$var['fabricante']."<br />";
			echo"Precio: ".$var['precio']."<br />";
			echo"Presentacion: ".$var['presentacion']."<br />";
			echo"Existencias: ".$var['existencias']."<br />";
			echo"Añejamiento (años): ".$var['anejamiento']."<br />";
			echo "Cantidad a Comprar:".'<input name = "cant" type="text"  VALUE=""><br /></input>';
			echo '<input type="submit" value="Comprar" name="Enviar"></input>';
	
			if($_GET["exito"]==1){
				echo "<br />funciona";
			}

		}else{
			echo "no funciona";
			
			//sleep(5);
			//header("refresh:0; url=index.php");
		}
	}catch(PDOException $pdoe){
		echo $pdoe->getMessage();
	}
?>

</body>
</html>
