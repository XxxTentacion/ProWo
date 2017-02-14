<?php
	session_start();
	$_SESSION['old'] = $_POST['old'];
	if (empty($_POST['old'])) {
		$_SESSION['status'] = 33;
		header("Location: /?page=Einstellungen");	}
	elseif (empty($_POST['new'])) {
		$_SESSION['status'] = 34;
		header("Location: /?page=Einstellungen");
	}
	elseif (empty($_POST['newR'])) {
		$_SESSION['status'] = 35;
		header("Location: /?page=Einstellungen");
	}
	elseif (!password_verify($_POST['old'], '$2y$10$idZZaJf9Y3GvWtGUHIgNqOXEX/BnyDPt0f4XU0VtYiMBeaWCGVlJm')) { #Get hashed password from $_SESSION['name']
		$_SESSION['status'] = 36;
		header("Location: /?page=Einstellungen");
	}
	elseif (!($_POST['new']==$_POST['newR'])) {
		$_SESSION['status'] = 37;
		header("Location: /?page=Einstellungen");
	}
	elseif (preg_match('/[^A-Za-z0-9]/',$_POST['new'])) {
		$_SESSION['status'] = 38;
		header("Location: /?page=Einstellungen");
	}
	else {
		unset($_SESSION['old']);
		$_SESSION['status'] = 62;
		header("Location: /?page=Einstellungen");		#WRITE PASSWORD INTO DATABASE
	}
?>
