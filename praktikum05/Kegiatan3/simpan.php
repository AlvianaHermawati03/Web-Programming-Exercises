<?php 

//membaca inputan
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tgllhr = $_POST['tgllhr'];
$tmptlhr = $_POST['tmptlhr'];

$namaFile = "datamhs.dat";
$myfile = fopen($namaFile, "a") or die("Tidak bisa membuka file!");
fwrite($myfile, $nim);
fwrite($myfile, $nama);
fwrite($myfile, $tgllhr);
fwrite($myfile, $tmptlhr);

fclose($myfile);

?>