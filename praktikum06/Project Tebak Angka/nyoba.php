<?php
$biltebak = $_POST['nebak'];
$bilacak = $_COOKIE['acak'];
if ($biltebak < $bilacak){
	echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah.";
	echo "<br>";
	echo "<form method='POST' action='nyoba.php'>
		Bilangan tebakan Anda <input type='text' name='nebak'>
		<input type='submit' name='submit' value='Submit'>
	</form>";
}elseif ($biltebak > $bilacak){
	echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.";
	echo "<br>";
	echo "<form method='POST' action='nyoba.php'>
		Bilangan tebakan Anda <input type='text' name='nebak'>
		<input type='submit' name='submit' value='Submit'>
	</form>";
}else{
	header("Location:selesai.php");
}
?>