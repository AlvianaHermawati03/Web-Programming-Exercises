<?php    
    session_start();
?>
<?php

echo "<p style='font-family:verdana'>Halo " .$_SESSION['name']. ", Selamat jawaban anda benar!!!</p>";
echo "<p style='font-family:verdana'>Lives: " .$_SESSION['lives']. " | Score: " .$_SESSION['score']."</p>";
echo "<a href='soalnya.php'style='font-family:verdana'>Soal berikutnya</a>";

?>