<?php
	include_once ('../koneksi.php');

	$no_jaringan = $_POST['no_jaringan'];
	$pelanggan = $_POST['pelanggan'];
	$lokasi = $_POST['lokasi'];
	$provider = $_POST['provider'];
	$no_kartu= $_POST['no_kartu'];
	$status_layanan= $_POST['status_layanan'];
	$perangkat= $_POST['perangkat'];
	$awal_pengisian= $_POST['awal_pengisian'];
	$awal_pengisian= date('Y-m-d', strtotime($awal_pengisian));
 	$masa_aktif= date('Y-m-d', strtotime('+1 month', strtotime($awal_pengisian)));
	$status= $_POST['status'];


	$query = "INSERT INTO bengkulu_pra (`no_jaringan`,`pelanggan`,`lokasi`,`provider`,`no_kartu`,`status_layanan`,`perangkat`,`awal_pengisian`,`masa_aktif`,`status`) VALUES ('$no_jaringan','$pelanggan','$lokasi','$provider','$no_kartu','$status_layanan','$perangkat','$awal_pengisian','$masa_aktif','$status')";
	$hasil = mysqli_query ($koneksi,$query);

	if (!$hasil){
		die("Penyimpanan gagal!!!");
	}
	
	header('location:pra_bengkulu.php');
?>