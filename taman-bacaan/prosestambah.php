<?php
include('crud.php');
// $id_pengunjung = $_POST['id_pengunjung'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$hasil = tambahTb($nama, $no_hp, $alamat);
if($hasil > 0)
	header("Location:index.php");
else {
	header("Location:gagaltambah.php");
}
?>