<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hasta pronto...</title>
</head>
<body>
<?php
	include('header.php');
	echo "Gracias por su visita!!!";
	setcookie("temp","",time()-3600);
	header('Location: index.php');
?>
</body>
</html>
