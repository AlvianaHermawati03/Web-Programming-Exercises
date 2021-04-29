<?php
echo "Selamat ya… Anda benar, saya telah memilih bilangan ".$_COOKIE['acak'];
echo "<br>";
echo "<a href='tebak.php'>ulangi lagi</a>"."<- link untuk mengulangi permainan kembali";
setcookie("acak", "", time() - 3*30*24*3600, "/");

?>