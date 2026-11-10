<?php
$host = "localhost";
$use = "root";
$pass =  "";
$db = "apk_kasir";

$koneksi = mysqli_connect($host, $use, $pass, $db);

if(!$koneksi){
    die("koneksi gagal".mysqli_connect_error());

}
?>