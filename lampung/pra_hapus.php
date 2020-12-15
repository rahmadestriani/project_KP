<?php
 include("../koneksi.php"); // untuk memanggil file koneksi.php
$no_jaringan = $_GET ['no_jaringan'];
$query = "DELETE FROM lampung_pra WHERE no_jaringan='$no_jaringan'";
mysqli_query($koneksi, $query);
    
//setelah data dihapus redirect ke halaman tampil.php
header("Location:pra_lampung.php");
?>