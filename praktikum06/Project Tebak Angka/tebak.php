<?php

// eksekusi ketik submit nama
if (isset($_POST['submit'])){
	setcookie("username", $_POST['username'], time() + 3*30*24*3600, "/");
}
//jika sudah ada cookie username
if(isset($_COOKIE['username'])){
	echo "<p>Hallo ".$_COOKIE['username']."</p>"; 
}
$number = rand(1, 100);
setcookie("acak", $number, time() + 3*30*24*3600, "/");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tebak Angka</title>
</head>
<body>
	<p>Nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
	<form method="POST" action="nyoba.php">
		Bilangan tebakan Anda <input type="text" name="nebak">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>