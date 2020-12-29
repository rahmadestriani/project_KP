
<?php
// biasoke koneksi selalu di pucuk sekali <<
include_once ("../koneksi.php");


// Ini kalo di kolom silahkan cari itu dimasukkan, dio bakan masuk ke if pertamo, kalo kosong dio bakal masuk ke else, yang dimano idak mencari apo apo
if(isset($_GET['cari']))
{
    $data = mysqli_query($koneksi,"SELECT * FROM bengkulu_pra where no_jaringan like '%$_GET[cari]%' OR pelanggan like '%$_GET[cari]%' OR lokasi like '%$_GET[cari]%' OR provider like '%$_GET[cari]%' OR no_kartu like '%$_GET[cari]%' OR status_layanan like '%$_GET[cari]%' OR perangkat like '%$_GET[cari]%' OR awal_pengisian like '%$_GET[cari]%' OR masa_aktif like '%$_GET[cari]%'");
    $last_search = $_GET['cari']; // ini kodingan kalo kato yang dicari tadi masuk ke variabel last_search untuk jadi pengingat apo yang kito cari di kolom pencarian agek
}
else
{
    $data = mysqli_query($koneksi,"SELECT * FROM bengkulu_pra");
    $last_search = '';
}

$banyak = mysqli_num_rows($data);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>REKAN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="../css/orionicons.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/favicon.png?3">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->

    <?php 
    session_start();
    if ($_SESSION['username']=='') {
      header("location: ../login.php?pesan=belum_login");
    }
    ?>

    <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow">
        <a href="../index.php" class="sidebar-toggler text-blue-500 mr-4 mr-lg-5 lead"><i class="o-home-1 fa-align-center"></i></a>
        <a href="../index.php" class="navbar-brand font-weight-bold text-uppercase text-base">REKAN</a>
        <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">

          <li class="nav-item dropdown mr-3"><a id="notifications" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-gray-400 px-1"><i class="fa fa-bell"></i><span class="notification-icon"></span></a>
            <div aria-labelledby="notifications" class="dropdown-menu">

                    <style type="text/css">
                      .bg-yellow {
                        background-color: #ffc107;
                      }

                      .bg-orange {
                        background-color: #ff781f;
                      }

                      a.bg-yellow:hover, a.bg-yellow:focus{
                        background-color: #ffc107;
                      }

                      a.bg-orange:hover, a.bg-orange:focus {
                        background-color: #ff781f;
                      }
                    </style>

                      <?php
                      include_once ("../koneksi.php");

                      $querynotif = "SELECT * FROM bengkulu_pra";
                      $querydatanotif = mysqli_query($koneksi, $querynotif);
                      if(mysqli_num_rows($querydatanotif)>0){
                      while($notif = mysqli_fetch_array($querydatanotif)){
                      $nama_kar_notif = $notif['pelanggan'];
                      $tanggal_akhir_kontrak = $notif['masa_aktif'];   
                      $no_jaringan = $notif['no_jaringan'];
                      ?>

                      <?php
                      $tanggal_akhir = new DateTime($tanggal_akhir_kontrak); 
                      $tanggal_now = new DateTime();
                      
                      $lama = $tanggal_now->diff($tanggal_akhir);
                      if ($lama->days <= 15 AND $lama->days > 10) {
                      ?>
                      <a href="#" class="dropdown-item mb-2 bg-yellow">
                      <div>
                          <p style="text-align: center;">Masa Aktif Pelanggan <b><?php echo $nama_kar_notif;?></b> dengan no jaringan <b><?php echo $no_jaringan;?></b> akan habis <b><?php echo "$lama->d"?></b> hari lagi</p>
                      </div></a>              
                     <?php
                       }

                      if ($lama->days <= 10 AND $lama->days > 5) {
                      ?>
                      <a href="#" class="dropdown-item mb-2 bg-orange">
                      <div>
                          <p style="text-align: center;">Masa Aktif Pelanggan <b><?php echo $nama_kar_notif;?></b> dengan no jaringan <b><?php echo $no_jaringan;?></b> akan habis <b><?php echo "$lama->d"?></b> hari lagi</p>
                      </div></a>              
                     <?php
                       }

                       if($lama->days <= 5 AND $lama->days >= 0){
                       ?>
                       <a href="#" class="dropdown-item mb-2 bg-red">
                      <div>
                          <p style="text-align: center;">Masa Aktif Pelanggan <b><?php echo $nama_kar_notif;?></b> dengan no jaringan <b><?php echo $no_jaringan;?></b> akan habis <b><?php echo "$lama->d"?></b> hari lagi</p>
                      </div></a>
                          <?php }
                          }
                          } ?>
          </li>
          
          <li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="https://www.lintasarta.net/wp-content/themes/lintasarta-theme/assets/img/logo.png" alt="Jason Doe" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>
            <div aria-labelledby="userInfo" class="dropdown-menu">
              
              <div class="dropdown"></div><a href="logout.php" class="dropdown-item">Logout</a>
            </div>
          </li>
        </ul>
      </nav>
    </header>
    
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <h2 class="text-center">AREA BENGKULU</h2>

            <form action="pra_bengkulu.php" method="get" style="text-align: right;">

                 <input class="form-control-sm" type="text" name="cari" value="<?php echo $last_search; ?>" placeholder="Silahkan Cari">

                 <input type="Submit" class="btn btn-sm btn-info" value="cari">
                 <!-- tambah tombol reset -->
                 <a class="btn btn-sm btn-warning" href="pra_bengkulu.php">X</a>
              </form>
              <br>
              <!-- Kodingan ini untuk memberitahu jika data yang dicari tidak ada maka akan keluar notifikasi -->
              <?php if(mysqli_num_rows($data) == 0){ ?>
                  <div class="alert alert-danger" role="alert">
                    Maaf kata <b><?php echo $last_search; ?></b> yang anda cari tidak ditemukan!
                  </div>
                  <?php
                  } 
                  else
                  { 
                    ?>

            <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr class="text-center">
                          <th>NO</th>
                          <th>No. Jar</th>
                          <th>Pelanggan</th>
                          <th>Lokasi</th>
                          <th>Provider</th>
                          <th>No. Kartu</th>
                          <th>St. Layanan</th>
                          <th>Perangkat</th>
                          <th>Masa Awal</th>
                          <th>Masa Akhir</th>
                          <th>Status</th>
                          <th colspan="2">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                      

                       

                        $no = 1;

                          if (!$data)
                          die ("Permintaan gagal!!!");

                        while ($bengkulu=mysqli_fetch_array($data))
                        {
                        ?>
                        <tr>
                          <td><?php echo $no++?></td>
                          <td><?php echo $bengkulu['no_jaringan']; ?></td>
                          <td><?php echo $bengkulu['pelanggan']; ?></td>
                          <td><?php echo $bengkulu['lokasi']; ?></td>
                          <td><?php echo $bengkulu['provider']; ?></td>
                          <td><?php echo $bengkulu['no_kartu']; ?></td>
                          <td><?php echo $bengkulu['status_layanan']; ?></td>
                          <td><?php echo $bengkulu['perangkat']; ?></td>
                          <td><?php echo date('d-m-y', strtotime($bengkulu['awal_pengisian'])); ?></td>
                          <td><?php echo date('d-m-y', strtotime($bengkulu['masa_aktif'])); ?></td>
                          <td><?php echo $bengkulu['status']; ?></td>
                          <td width="45">
                            <a href="pra_ubah.php?no_jaringan=<?php echo $bengkulu['no_jaringan']; ?>">
                              <img src="data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64' aria-labelledby='title' aria-describedby='desc' role='img' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Ctitle%3EEdit%3C/title%3E%3Cdesc%3EA color styled icon from Orion Icon Library.%3C/desc%3E%3Cpath data-name='layer5' d='M58.4 18.8l.9-.9c3.7-3.7 2.7-8.7-.9-12.3S49.8 1 46.2 4.7l-.9.9' fill='%23f27e7c'%3E%3C/path%3E%3Cpath data-name='layer4' fill='%23fbaa51' d='M52.6 24.5l5.8-5.7L45.2 5.6l-5.7 5.8'%3E%3C/path%3E%3Cpath data-name='layer3' fill='%23ed4c49' d='M19.6 57.6l33-33.1-13.1-13.1-33.1 33'%3E%3C/path%3E%3Cpath data-name='opacity' fill='%23fff' opacity='.25' d='M39.5 11.4l-33.1 33 4.4 4.4 33.1-33-4.4-4.4z'%3E%3C/path%3E%3Cpath data-name='opacity' fill='%23000028' opacity='.2' d='M48.3 20.1L15.2 53.2l4.4 4.4 33-33.1-4.3-4.4z'%3E%3C/path%3E%3Cpath data-name='layer2' fill='%23fddab3' d='M19.6 57.6L6.4 44.4 3.7 55.8l4.5 4.5 11.4-2.7z'%3E%3C/path%3E%3Cpath data-name='layer1' fill='%232e4369' d='M8.2 60.3l-4.5-4.5-1.3 5.8 5.8-1.3z'%3E%3C/path%3E%3Cpath data-name='stroke' fill='none' stroke='%232e4369' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2.4 61.6l17.2-4L6.4 44.4l-4 17.2zm56-42.8l.9-.9c3.7-3.7 2.7-8.7-.9-12.3S49.8 1 46.2 4.7l-.9.9m7.3 18.9l5.8-5.7L45.2 5.6l-5.7 5.8'%3E%3C/path%3E%3Cpath data-name='stroke' fill='none' stroke='%232e4369' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19.6 57.6l33-33.1-13.1-13.1-33.1 33'%3E%3C/path%3E%3C/svg%3E" alt="Edit"/>
                            </a>
                          </td>
                          <td width="45">
                          <a href="pra_hapus.php?no_jaringan=<?php echo $bengkulu['no_jaringan']; ?>">
                            <img src="data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64' aria-labelledby='title' aria-describedby='desc' role='img' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Ctitle%3ETrash Can%3C/title%3E%3Cdesc%3EA color styled icon from Orion Icon Library.%3C/desc%3E%3Cpath data-name='layer1' d='M52.5 10l-3 47.1a5 5 0 0 1-4.8 4.9H19.3a5 5 0 0 1-4.9-4.9L11.5 10z' fill='%23c3d6f9'%3E%3C/path%3E%3Cpath data-name='opacity' d='M52.5 10h-41l2.9 47.1a5 5 0 0 0 4.9 4.9h5.1l-2.6-48h30.4z' fill='%23000028' opacity='.15'%3E%3C/path%3E%3Cpath data-name='stroke' fill='none' stroke='%232e4369' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M6 10h52m-36 0V5.9A3.9 3.9 0 0 1 25.9 2h12.2A3.9 3.9 0 0 1 42 5.9V10m10.5 0l-2.9 47.1a5 5 0 0 1-4.9 4.9H19.3a5 5 0 0 1-4.9-4.9L11.5 10M32 18v36M22 18l2 36m18-36l-2 36'%3E%3C/path%3E%3C/svg%3E" alt="Trash Can" />
                          </a>
                          </td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                      
            </table>
            <?php } ?>
            <center>
                <a href="pra_form.php" class="btn btn-lg btn-info">Add</a>
                <a href="pra_export.php" class="btn btn-lg btn-info">Export</a>
            </center>

        </section>
        </div>
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-left text-primary">
                <p class="mb-2 mb-md-0">Your company &copy; 2018-2020</p>
              </div>
              <div class="col-md-6 text-center text-md-right text-gray-400">
                <p class="mb-0">Design by <a href="https://bootstrapious.com/admin-templates" class="external text-gray-400">Bootstrapious</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="../js/charts-home.js"></script>
    <script src="../js/front.js"></script>
  </body>
</html>