<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Bodega Tienda Virtual</title>
		<link rel="stylesheet" href="css/perfil_style.css"/>
	</head>
<body>
<form method="POST" action="mainbodmod.php" align="center">
<?php
	include 'header.php';
	try{	
		require_once __DIR__ . "/db.php";
		$state = $conn->prepare("SELECT * FROM licor WHERE cod_licor=:cod");
	   	$state->bindParam(":cod",$_POST['cod_licor']);
		$state->execute();
		$state->setFetchMode(PDO::FETCH_ASSOC);
		if($var = $state->fetch()){
			echo"Codigo del Licor:".'<input name = "cod_licor" type="text" readonly="readonly" VALUE="'.$var['cod_licor'].'"><br /></input>';
			echo"Nombre:".'<input name = "nombre" type="text" readonly="readonly" VALUE="'.$var['nombre'].'"><br /></input>';
			echo"Fabricante:".'<input name = "fabricante" type="text" readonly="readonly" VALUE="'.$var['fabricante'].'"><br /></input>';
			echo"Precio:".'<input name = "precio" type="text"  VALUE="'.$var['precio'].'"><br /></input>';
			echo"Presentacion:".'<input name = "presentacion" type="text" readonly="readonly" VALUE="'.$var['presentacion'].'"><br /></input>';
			echo"Existencias:".'<input name = "existencias" type="text" readonly="readonly"   VALUE="'.$var['existencias'].'"><br /></input>';
			echo "Nuevas Existencias:".'<input name = "n_existencias" type="text"  VALUE=""><br /></input>';
			echo"Anejamiento:".'<input name = "anejamiento" type="text" readonly="readonly" VALUE="'.$var['anejamiento'].'"><br /></input>';
			echo '<input type="submit" value="Modificar" name="Enviar"></input>';
	
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

</form>

</body>
</html>
