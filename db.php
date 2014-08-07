<?php
	try{
		$conn = new PDO("mysql:host=localhost;dbname=db_empresa","root","root");
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);	
	}catch(PDOException $pdoe){
		echo $pdoe->getMessage();
	}

?>
