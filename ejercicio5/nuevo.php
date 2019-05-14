<?php
	include('php/conection.php');

	if ($_POST) {
		if (isset($_POST['nombre'])&&isset($_POST['email'])&&isset($_POST['curso'])&&!empty($_POST['nombre'])&&!empty($_POST['curso'])&&!empty($_POST['email'])) {

			$nombre = $_POST['nombre'];
			$email = $_POST['email'];
			$curso = $_POST['curso'];

			$sqlinsert = "INSERT INTO alumnos(nombre, mail, codigocurso) VALUES ('$nombre', '$email', '$curso')";

			$res = $conn->query($sqlinsert);

			if ($conn->error) {
				header('Location: nuevo.php?message_error=Error en la insercion'.$conn->error);
			}else{
				//echo 'Registro correcto!';
			}
		}else{
			header('Location: nuevo.php?message_error=Llene todos los campos');
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Estudiantes</title>
</head>
<body>
	<h2>Ingresar Estudiantes</h2>
	<form method="POST">
		<input type="text" name="nombre" placeholder="Nombre del Estudiante"><br><br>
		<input type="text" name="email" placeholder="Email del Estudiante"><br><br>
		<input type="text" name="curso" placeholder="Codigo Curso"><br><br>
		<button>Registrar alumno</button><br><br>
	</form>
	<a href="index.php">Atras</a>
</body>
</html>