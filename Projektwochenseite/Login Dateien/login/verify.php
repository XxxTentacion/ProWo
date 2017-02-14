<?php
	session_start();
	$_SESSION['name'] = (isset($_POST['name']))?$_POST['name']:"";
	if (!empty($_POST["name"])&&!empty($_POST["password"])) {
		if (!preg_match('/[^A-Za-z0-9]/',$_POST['name'])) {  
			$hash = '$2y$10$idZZaJf9Y3GvWtGUHIgNqOXEX/BnyDPt0f4XU0VtYiMBeaWCGVlJm'; #Hash aus der Datenbank abfragen an Stelle des Users
			if (empty($hash)) {		#Wenn kein Hash vorhanden existiert der Schüler nicht
				$_SESSION['status'] = 23;	
				header ("Location: login.php");
			}	
			else {
				if (password_verify($_POST["password"], $hash)) { 
					$_SESSION["permission"] = 1;	
					header ("Location: /?page=Start");
				}
				else {
					$_SESSION['status'] = 32;
					header ("Location: login.php");
				}
			}
		}
		else {
			$_SESSION['status'] = 23;
			header ("Location: login.php");
		}
	}
	elseif (empty($_POST["name"])&&empty($_POST["password"])) {
		$_SESSION['status'] = 22;
		header ("Location: login.php");
	}
	elseif (empty($_POST["name"])) {
		$_SESSION['status'] = 21;
		header ("Location: login.php");
	} 
	elseif (empty($_POST["password"])) {
		$_SESSION['status'] = 31;
		header ("Location: login.php");
	}
?>