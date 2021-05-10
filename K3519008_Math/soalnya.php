<?php
	session_start();
	if (isset($_SESSION["email"])) {
	} else {
		$_SESSION["name"] = $_POST["nama"];
		$_SESSION["email"] = $_POST["email"];
	}
	if ($_SESSION["lives"] == 0) {
		header('Location: logout.php');
	}

	$acak1 = rand(0,20);
	$acak2 = rand(0,20);
	$hasil = $acak1 + $acak2;
	$_SESSION["hasil"] = $hasil;
?>

<form action="ngecek.php" method="POST">
                <p style="font-family:verdana">Halo <?php echo $_SESSION["name"];?>, tetap semangat ya...you can do the best!!!</p>
                <p style="font-family:verdana">Lives: <?php echo $_SESSION["lives"];?> | Score: <?php echo $_SESSION["score"];?></p>
                <p style="font-family:verdana">Berapakah <?php echo $acak1; ?> + <?php echo $acak2; ?> =  <input name="hasil" placeholder="Masukkan Jawaban" type="number">   <button type="submit" value="jawab">ANSWER</button></p>
				
</form>