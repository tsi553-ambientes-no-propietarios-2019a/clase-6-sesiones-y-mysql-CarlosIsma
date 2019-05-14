<?php

	$conn = new mysqli('localhost', 'root', '', 'estudiantes');

	if ($conn->connect_error) {
		header('Location: ..index.php?message_error=Error en la conexion');
		exit;
	}

?>
