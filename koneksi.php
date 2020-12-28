<?php 
$koneksi = mysqli_connect("localhost","root","","rekan");
 
if (!$koneksi)
		die ("Database MySQL tidak dapat dibuka");

	if(isset($_GET['cari']))
{
    $data = mysqli_query($koneksi,"SELECT * FROM rekan where no_jaringan like '%$_GET[cari]%' OR pelanggan like '%$_GET[cari]%' OR lokasi like '%$_GET[cari]%' OR  like '%$_GET[cari]%'  pelanggan like '%$_GET[cari]%'");
}
else
{
    $data = mysqli_query($koneksi,"SELECT * FROM rekan");
}
 
?>