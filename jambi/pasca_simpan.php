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


	$query = "INSERT INTO jambi_pasca (`no_jaringan`,`pelanggan`,`lokasi`,`provider`,`no_kartu`,`status_layanan`,`perangkat`,`status`) VALUES ('$no_jaringan','$pelanggan','$lokasi','$provider','$no_kartu','$status_layanan','$perangkat','$status')";
	$hasil = mysqli_query ($koneksi,$query);

	if (!$hasil){
		die("Penyimpanan gagal!!!");
	}
	header('location:pasca_jambi.php');
?>