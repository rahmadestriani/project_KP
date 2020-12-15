<?php
	include_once ('../koneksi.php');

	$no_jaringan = $_POST['no_jaringan'];
	$pelanggan = $_POST['pelanggan'];
	$lokasi = $_POST['lokasi'];
	$provider = $_POST['provider'];
	$no_kartu= $_POST['no_kartu'];
	$status_layanan= $_POST['status_layanan'];
	$perangkat= $_POST['perangkat'];
	$status= $_POST['status'];


	$query = "UPDATE jambi_pasca SET `pelanggan`='$pelanggan',`lokasi`='$lokasi',`provider`='$provider',`no_kartu`='$no_kartu',`status_layanan`='$status_layanan',`perangkat`='$perangkat',`status`='$status' WHERE `no_jaringan`='$no_jaringan'";
	$hasil = mysqli_query ($koneksi,$query);

	if (!$hasil){
		die("Pengubahan gagal!!!");
	}
	header('location:pasca_jambi.php');
?>