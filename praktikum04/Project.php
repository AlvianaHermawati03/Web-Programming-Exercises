<?php
$namaFile = "datamhs.dat";
//membuka dan membaca file
$myfile = fopen($namaFile, "r") or die("Tidak bisa buka file!");

//menghitung kalender sekarang
$kalenderSkrg = explode("-", date("Y-m-d"));
$tahunSkrg = $kalenderSkrg[0];
$bulanSkrg = $kalenderSkrg[1];
$tanggalSkrg = $kalenderSkrg[2];
$jd2 = GregorianToJD($bulanSkrg, $tanggalSkrg, $tahunSkrg);

//menghitung usia
function usia(String $tgllahir, $jd2){
	$tanggalKelahiran = explode("-", $tgllahir);
	$yearbirth = $tanggalKelahiran[0];
	$monthbirth = $tanggalKelahiran[1];
	$datebirth = $tanggalKelahiran[2];
	$jd1 = GregorianToJD($monthbirth, $datebirth, $yearbirth);
	$umur = intval(($jd2-$jd1)/365.25);
	return $umur;
}
echo "<h2>Data Mahasiswa</h2>";
echo "<table border='1'>";
echo("<tr>
		<th>No</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Tanggal Lahir</th>
		<th>Tempat Lahir</th>
		<th>Usia (thn)</th>
	<tr>");
$no = 1;
$jumlahData = 0;

//memecah isi file
while(!feof($myfile)) {
	$pecah = explode("|", fgets($myfile));
	if ($pecah[0] != ''){
        $umur = usia($pecah[2], $jd2);
        echo("
            <th>$no</th>
            <td>$pecah[0]</td>
            <td>$pecah[1]</td>
            <td>$pecah[2]</td>
            <td>$pecah[3]</td>
            <td>$umur</td>");
        $no++;
        $jumlahData++;
    }
    echo("</tr>");
}
echo "</table>";

echo "Jumlah data: ".$jumlahData;
fclose($myfile);
?>