<?php
session_start();
$_SESSION["lives"] = 5;
$_SESSION["score"] = 0;

if (isset($_SESSION["email"])) {
    ?>
    <p style="font-family:verdana">Halo <?php echo $_SESSION["name"];?>, selamat datang kembali di permainan ini!</p>
    <a href="soalnya.php">[MAIN LAGI]</a>
    <p style="font-family:verdana">Bukan Anda? <a href="ngulang.php">[KLIK DISINI]</p></a>
<?php
} else {
?>
    <form action="soalnya.php" method="POST">
        <label style="font-family:verdana">Nama</label>
        <input type="text" name="nama" id="name" placeholder="Masukkan Nama" style="font-family:verdana">
        <br><br>
		<label style="font-family:verdana">Email</label>
        <input type="text" name="email" id="email" placeholder="Masukkan Email" style="font-family:verdana">
		<br><br>
        <button type="submit" name="mulai" style="font-family:verdana">START GAME</button>
    </form>
<?php
}
?>