<?php
function hitungDenda($tglHarusKembali, $tglKembali){
	//memecah tglHarusKembali
	$pecah1 = explode("-", $tglHarusKembali);
	$date1 = $pecah1[0];
	$month1 = $pecah1[1];
	$year1 = $pecah1[2];
	
	//memecah tglKembali
	$pecah2 = explode("-", $tglKembali);
	$date2 = $pecah2[0];
	$month2 = $pecah2[1];
	$year2 = $pecah2[2];
	
	//menghitung JDN dari masing-masing tgl
	$jd1 = GregorianToJD($month1, $date1, $year1);
	$jd2 = GregorianToJD($month2, $date2, $year2);
	
	//menghitung selisih kedua tgl
	$selisih = abs($jd2 - $jd1);
	
	//menghitung denda
	$denda = $selisih*3000;
	
	return $denda;
}

echo "Besarnya denda adalah : Rp ".hitungDenda("07-01-2021","11-01-2021").",-";
?>