<html>
    <head>
        <title>Contacto</title>
        <link rel='stylesheet' href='css/contacto.css'>
		
    </head>
    <body>
        <body background="img/background.jpg">


	<?php
		include 'header.php';
		?>
        <form class='contacto' align="center" style="color:#FFFFFF">
            <div><label>Tu Nombre:</label><input type='text' value='' ></div>
            <div><label>Tu Email:</label><input type='text' value=''></div>
            <div><label>Asunto:</label><input type='text' value=''></div>
            <div><label>Mensaje:</label><textarea rows='6'></textarea></div>
            <div><input type='submit' value='Envia Mensaje'></div>
        </form>
    </body>
</html>