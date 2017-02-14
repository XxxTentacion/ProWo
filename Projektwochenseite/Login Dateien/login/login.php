<?php
	session_start();
?>
<html>  
	<head>
		<title>Login - Projektwoche</title>
	</head>
	<link rel="stylesheet" href="../style.css">	
	<body>
		<center>
			<br><h1>Projektwoche - Login</h1>
		</center>
		<form action="verify.php" method="post" class="container">	
			<label><b>Benutzername:</b></label>
			<input type="text" placeholder="Name" name="name" value="<?php echo (isset($_SESSION['name']))?$_SESSION['name']:"";?>"> 		
			<label><b>Passwort:</b></label>
			<input type="password" placeholder="Passwort" name="password">
			<button type="submit">Login</button>
			<span class="status">
			<?php
				require_once("../functions.php");
				printStatus();
			?>	
			</span>
		</form>
	</body>
</html>