<?php
	if($_SERVER['SCRIPT_NAME'] == '/anp/deber6/ej1/index.php' && isset($_SESSION['user']) ){
		header('Location: home.php');
		exit;
	}
	if ($_SERVER['SCRIPT_NAME'] == '/anp/deber6/ej1/home.php' && !isset($_SESSION['user'])) {
		header('Location: index.php');
		exit;
	}
?>