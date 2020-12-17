<?php
function koneksi(){
	$servername = "localhost";
	$username = "id15577210_root";
	$password = "Qj>24)(i1#W3(UvX";
	$dbname = "id15577210_tamanbacaan";
// menciptakankoneksi
	$koneksi = mysqli_connect($servername, $username, $password,
		$dbname);
// Cekkoneksi
	if (!$koneksi) {
		die("Koneksigagal: " . mysqli_connect_error());
	}
	return $koneksi;
}
?>