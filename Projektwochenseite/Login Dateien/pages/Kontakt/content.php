<center>
	<br><h2>Kontakt</h2>
</center>
<form class="container" method="post" action="functionality/sendEmail.php">		
	<label><b>E-Mail Adresse:</b></label>
	<input type="text" placeholder="E-Mail" name="email" value="<?php echo isset($_SESSION['email'])?$_SESSION['email']:"";?>">
		
	<label><b>Nachricht:</b></label>
	<textarea placeholder="Sehr geehrter Herr Bickel," name="message"><?php echo isset($_SESSION['message'])?$_SESSION['message']:"";?></textarea>
					
	<button type="submit">Senden</button>
	<span class="status">
		<?php
			printStatus();
		?>	
	</span>	
</form>