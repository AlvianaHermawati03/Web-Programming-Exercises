<?php    
    session_start();
?>

<?php
echo "<p style='font-family:verdana'>Hallo " .$_SESSION['name']. " , Sayang jawaban Anda salah… tetap semangat ya !!!</p>";
echo "<p style='font-family:verdana'>Lives: " .$_SESSION['lives']. " | Score: " .$_SESSION["score"]."</p>";
echo "<a href='soalnya.php' style='font-family:verdana'>Soal berikutnya</a>";
?>