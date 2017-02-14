<?php
	session_start();
	$_SESSION['selector1'] = $_POST['selector1'];	
	$_SESSION['selector2'] = $_POST['selector2'];
	$_SESSION['selector3'] = $_POST['selector3'];
	if ($_POST['selector1']=='0'||$_POST['selector2']=='0'||$_POST['selector3']=='0') {
		$_SESSION['status'] = 41;
		header("Location: /?page=Eintragen");
	}
	elseif ($_POST['selector1']==$_POST['selector2']||$_POST['selector1']==$_POST['selector3']||$_POST['selector2']==$_POST['selector3']) {
		$_SESSION['status'] = 42;
		header("Location: /?page=Eintragen");
	}
	else {
		$_SESSION['status'] = 61;
		header("Location: /?page=Eintragen");
	}
?>