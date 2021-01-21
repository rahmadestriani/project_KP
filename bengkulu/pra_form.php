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
    <link rel="shortcut icon" href="img/favicon.png?3">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->

    <?php 
    session_start();
    if ($_SESSION['username']=='') {
      header("location: login.php?pesan=belum_login");
    }
    ?>

    <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow">
        <a href="../index.php" class="navbar-brand font-weight-bold text-uppercase text-base">TRIIS</a>
        <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
          <li class="nav-item">
            
          </li>
          
           <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
          
          
              
              <a href="../logout.php" class="btn btn-danger"><i class="o-exit-1 fa-align-center"></i> Log Out</a>
            
        </ul>
        </ul>
      </nav>
    </header>
    
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <center><h2>AREA BENGKULU</h2></center>
            <div class="col-lg-12 mb-5">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Data Kartu Pelanggan</h3>
                  </div>
                  <div class="card-body">

                   <form role="form" action="pra_simpan.php" method="POST">
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">No Jaringan</label>
                        <div class="col-md-9">
                          <input name="no_jaringan" type="text" class="form-control">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Pelanggan</label>
                        <div class="col-md-9">
                          <input name="pelanggan" type="text" class="form-control">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Lokasi</label>
                        <div class="col-md-9">
                          <input name="lokasi" type="text" class="form-control">
                        </div>
                      </div>

                    
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Provider</label>
                        <div class="col-md-9 select mb-3">
                          <select name="provider" class="form-control">
                            <option value="Telkomsel">Telkomsel</option>
                            <option value="XL">XL</option>
                            <option value="Indosat">Indosat</option>
                            <option value="Smartfren">Smartfren</option>
                            <option value="Tri">Tri</option>
                          </select>
                        </div>
                    </div>

                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">No Kartu</label>
                        <div class="col-md-9">
                          <input name="no_kartu" type="text" class="form-control">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Status Layanan</label>
                        <div class="col-md-9 select mb-3">
                          <select name="status_layanan" class="form-control">
                            <option value="Main">Main</option>
                            <option value="Backup">Backup</option>
                          </select>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Perangkat</label>
                        <div class="col-md-9 select mb-3">
                          <select name="perangkat" class="form-control">
                            <option value="Fortinet">Fortinet</option>
                            <option value="Gazele">Gazele</option>
                            <option value="Mikrotik">Mikrotik</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Status</label>
                        <div class="col-md-9 select mb-3">
                          <select name="status" class="form-control">
                            <option value="Aktif">Aktif</option>
                            <option value="Disable">Disable</option>
                            <option value="Standby">Standby</option>
                          </select>
                    </div>
                  </div>

                  <div class="form-group row">
                        <label class="col-md-3 form-control-label">Awal Pengisian Kuota</label>
                        <div class="col-md-9">
                          <input name="awal_pengisian" type="date" class="form-control">
                        </div>
                  </div>

                        <center>
                           <a href="pra_bengkulu.php" class="btn btn-secondary">Cancel</a>
                          <button type="submit" class="btn btn-success">Save</button>
                        </center>

                    </form>
                </div>
              </div>
              </div>  
        </section>

           

        </div>
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-left text-primary">
                <p class="mb-2 mb-md-0">TRIIS - 2021</p>
              </div>
              <div class="col-md-6 text-center text-md-right text-gray-400">
                <p class="mb-0">Design by <a href="https://bootstrapious.com/admin-templates" class="external text-gray-400">Bootstrapious</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </footer>
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