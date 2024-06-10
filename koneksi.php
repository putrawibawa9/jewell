<?php
$host="localhost";
$username="root";
$password="";
$database="jewell";

//membuat koneksi
$koneksi=mysqli_connect($host, $username, $password, $database);

//cek koneksi
if (!$koneksi) {
	//error
	die("Koneksi gagal: " .  mysqli_connect_error($koneksi));	
}
?>