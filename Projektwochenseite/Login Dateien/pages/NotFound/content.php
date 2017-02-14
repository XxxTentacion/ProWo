<?php
	function ackermann($m, $n) {
		if ($m == 0 && $n >= 0) {
			return ($n+1);
		}
		elseif ($m > 0 && $n == 0) {
			return ackermann(($m-1), 1);
		}
		elseif ($m > 0 &&  $n > 0) {
			return ackermann(($m-1), ackermann($m, ($n-1)));
		}
		else {
			return "Error!";
		}	# isset($_POST['m'])?$_POST['m']:0
	}
?>
<h1 style="padding-left:1em">Seite nicht gefunden!</h1>
<center>
	<br><h1>Ackermannfunktion</h1>
</center>
<form method="post" class="container">
	<input type="text" placeholder="m" name="m" style="width: 49.5%;"> 
	<input type="text" placeholder="n" name="n" style="width: 49.5%;">
	<button type="submit" name="show" value="true">Berechnen</button>
	<?php if($_POST){echo "ackermann(".(empty($_POST['m'])?"0":$_POST['m']).", ".(empty($_POST['n'])?"0":$_POST['n']).") = ".ackermann($_POST['m'], $_POST['n']);}?>
</form>