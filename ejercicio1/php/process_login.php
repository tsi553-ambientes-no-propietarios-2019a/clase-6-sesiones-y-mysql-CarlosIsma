<?php
include('conection.php');
if($_POST){
	if(isset($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['username'])&&!empty($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
		$res = $conn->query($sql);
		if($conn->error){
			
			header('Location: ../index.php');
			exit;
		}
		if ($res->num_rows > 0) {
			while($row = $res->fetch_assoc()){
				$_SESSION['user'] = ['username' => $row['username'], 'id' => $row['id'] ];
				
				header('Location: ../inicio.php');
				exit;
			}
		}else{
			header('Location: ../index.php?menssage_error=Datos incorrectos!');
		}
		
	}else{
		header('Location: ../index.php?error_message=Ingrese todos los datos!');
		exit;
		echo 'Ingrese todos los datos';
	}
}else{
	header('Location: ../index.php');
	exit;
}
?>