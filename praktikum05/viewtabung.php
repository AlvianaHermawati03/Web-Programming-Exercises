<?php
$namaFile = "datatabung.dat";
//membuka dan membaca file
$myfile = fopen($namaFile, "r") or die ("Tidak bisa membuka file!");

//membuat tabel
echo "<h2>DATA UKURAN TABUNG</H2>";
echo "<table border='1'>";
echo("<tr>
		<th>NAMA TABUNG</th>
		<th>DIAMETER</th>
		<th>TINGGI</th>
		<th>LUAS</th>
	<tr>");
//memecah isi file
while(!feof($myfile)) {
	$pecah = explode(",", fgets($myfile));
	if ($pecah[0] != ''){
        echo("
            <td>$pecah[0]</td>
            <td>$pecah[1]</td>
            <td>$pecah[2]</td>
			<td><a href=hitungluas.php?n=$pecah[0]&d=$pecah[1]&t=$pecah[2]>view</a>");
    }
    echo("</tr>");
}
echo "</table>";
fclose($myfile);
?>