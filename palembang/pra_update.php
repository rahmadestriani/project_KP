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


	$query = "UPDATE plg_pra SET `pelanggan`='$pelanggan',`lokasi`='$lokasi',`provider`='$provider',`no_kartu`='$no_kartu',`status_layanan`='$status_layanan',`perangkat`='$perangkat',`awal_pengisian`='$awal_pengisian',`masa_aktif`='$masa_aktif',`status`='$status' WHERE `no_jaringan`='$no_jaringan'";
	$hasil = mysqli_query ($koneksi,$query);

	if (!$hasil){
		die("Pengubahan gagal!!!");
	}
	header('location:pra_plg.php');
?>