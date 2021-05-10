<?php

$host="localhost";
$username="root";
$password="";
$db="gamemath";

$hubung = mysqli_connect($host, $username, $password, $db);

function tambahPlayer($nama, $email, $score){
    $tambah = "INSERT INTO player (name, email, score) VALUES('".$nama."','".$email."','".$score."')";
    if (mysqli_query($GLOBALS['hubung'], $tambah)) {
      } else {
        echo "Error: " . $tambah . "<br>" . mysqli_error($GLOBALS['hubung']);
      }
    mysqli_close($GLOBALS['hubung']);
}
?>