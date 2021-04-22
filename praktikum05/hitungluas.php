<?php

//menghitung luas permukaan tabung
$phi = 3.14;
$r = $_GET['d']/2;
$t = $_GET['t'];
$luas = (2*$phi*$r*$t) + (2*$phi*$r**2);
echo "Luas tabung ".$_GET['n']." dengan diameter ".$_GET['d']." dan tinggi ".$_GET['t']." adalah ".$luas." satuan luas ";

?>