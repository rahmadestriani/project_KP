<?php
	include_once ('../koneksi.php');

	$no_jaringan = $_POST['no_jaringan'];
	$pelanggan = $_POST['pelanggan'];
	$lokasi = $_POST['lokasi'];
	$area = 'palembang';
	$provider = $_POST['provider'];
	$no_kartu= $_POST['no_kartu'];
	$jenis_provider= $_POST['jenis_provider'];
	$status_layanan= $_POST['status_layanan'];
	$perangkat= $_POST['perangkat'];
	if (empty($_POST['awal_pengisian'])) {
		$awal_pengisian = '0000-00-00';
		$masa_aktif = '0000-00-00';
	}
	else {
	$awal_pengisian= $_POST['awal_pengisian'];
	$masa_aktif= date('y-m-d', strtotime('+1 month', strtotime($awal_pengisian)));
	}
	$status= $_POST['status'];


	$query = "INSERT INTO rekap_kartu (`no_jaringan`,`pelanggan`,`lokasi`,`area`,`provider`,`no_kartu`,`jenis_provider`,`status_layanan`,`perangkat`,`awal_pengisian`,`masa_aktif`,`status`) VALUES ('$no_jaringan','$pelanggan','$lokasi','$area','$provider','$no_kartu','$jenis_provider','$status_layanan','$perangkat','$awal_pengisian','$masa_aktif','$status')";
	$hasil = mysqli_query ($koneksi,$query);

	if (!$hasil){
		die("Penyimpanan gagal!!!");
	}
	header('location:palembang.php');
?>