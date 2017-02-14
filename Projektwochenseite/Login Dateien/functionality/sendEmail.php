<?php
	session_start();
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['message'] = $_POST['message'];
	if (empty($_SESSION['email'])) {
		$_SESSION['status'] = 51;
		header("Location: /?page=Kontakt");
	}
	elseif (empty($_SESSION['message'])) {
		$_SESSION['status'] = 52;
		header("Location: /?page=Kontakt");
	}
	elseif (!preg_match('/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}$/',$_POST['email'])) {
		$_SESSION['status'] = 53;
		header("Location: /?page=Kontakt");
	}
	else {
		$_SESSION['message'] = wordwrap($_SESSION['message'], 70);
		$message = "Angegebene Email: ".$_SESSION["email"]."\nNachricht:\n\n".$_SESSION["message"];
		mail('informatikprojektwoche@gmail.com', 'Projektwoche - Kontaktform: '.$_SESSION["name"], $message);	#Andere Email Adresse angeben
		unset($_SESSION['email']);
		unset($_SESSION['message']);
		$_SESSION['status'] = 63;
		header("Location: /?page=Kontakt"); 
	}
?>