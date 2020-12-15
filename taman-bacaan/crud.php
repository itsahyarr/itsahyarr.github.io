<?php
require_once 'koneksi.php';
function bacaTb($sql){
	$data = array();
	$koneksi = koneksi();
	$hasil = mysqli_query($koneksi, $sql);
	if (mysqli_num_rows($hasil) == 0) {
		mysqli_close($koneksi);
		return null;
	}
	$i=0;
	while($baris = mysqli_fetch_assoc($hasil)){
		// $data[$i]['id_pengunjung']= $baris['id_pengunjung'];
		$data[$i]['nama'] = $baris['nama'];
		$data[$i]['no_hp'] = $baris['no_hp'];
		$data[$i]['alamat'] = $baris['alamat'];
		$i++;
	}
	mysqli_close($koneksi);
	return $data;
}

function tambahTb($nama, $no_hp, $alamat){
	$koneksi = koneksi();
	$sql = "insert into pengunjung values('$nama', '$no_hp', '$alamat')";
	$hasil = 0;
	if(mysqli_query($koneksi, $sql))
		$hasil = 1;
	mysqli_close($koneksi);
	return $hasil;
}

?>