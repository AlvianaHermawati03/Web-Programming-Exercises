<?php
$baris = 4;
$kolom = 5;
echo "<table border='1'>";
$angka = 1;
for($i = 0; $i < $baris; $i++){
 	echo "<tr>";
 	for ($j = 0; $j < $kolom; $j++){
		if ($angka%2==0){
			echo "<td style='background-color: red'><font color='white'>".$angka."</font></td>";
		}
		else {
			echo "<td style='background-color: white'><font color='red'>".$angka."</font></td>";
 		}
		$angka++;
 	}
  	echo "</tr>";
}
echo "</table>";
?>
