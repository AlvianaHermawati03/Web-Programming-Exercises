<?php    
    session_start();
    include "config.php";
    tambahPlayer($_SESSION["name"], $_SESSION["email"], $_SESSION["score"]);
?>

<!DOCTYPE html>
<html>
    <head>
		<style>
		
			tr:nth-child(even){background-color: #F0F8FF}
			th{
				background-color:#808080;
				color: white;
			}
			th, td{
				font-family:verdana;
				padding : 10px;
			}
		</style>
    </head>
<body>
    <form>
        <p style="font-family:verdana">Hallo <?php echo $_SESSION["name"];?>, Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik. <i class="fa fa-smile"></i></p>
        <p style="font-family:verdana">Score Anda : <?php echo $_SESSION["score"]; ?></p>
        <p style="font-family:verdana">HALL OF FAME</p>
        <table border-collapse:collapse>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Score</th>
            <tr>
            <?php
            $config = mysqli_connect($host, $username, $password, $db) or die(mysqli_error());
            $sql = "SELECT * FROM player ORDER BY score DESC LIMIT 10";
            $result = mysqli_query($GLOBALS['config'], $sql);
            if (mysqli_num_rows($result) > 0) {
                $i = 1;
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["score"] . "</td>";
                    echo "</tr>";
                    $i = $i + 1;  
                }
            } else {
                
            }
            mysqli_close($GLOBALS['config']);
            ?>
        </table>
		<br>
        <a href="index.php" style="font-family:verdana">Ayo main lagi</a>
    </form>
</body>
</html>