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
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="css/orionicons.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
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
        <a href="index.php" class="navbar-brand font-weight-bold text-uppercase text-base">REKAN</a>
        <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
          
          <li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="https://www.lintasarta.net/wp-content/themes/lintasarta-theme/assets/img/logo.png" alt="Jason Doe" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>
            <div aria-labelledby="userInfo" class="dropdown-menu">
              
              <div class="dropdown"></div><a href="logout.php" class="dropdown-item">Logout</a>
            </div>
          </li>
        </ul>
      </nav>
    </header>
    <!--<div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="index.html" class="sidebar-link text-muted active"><i class="o-home-1 mr-3 text-gray"></i><span>Home</span></a></li>
              <li class="sidebar-list-item"><a href="charts.html" class="sidebar-link text-muted"><i class="o-sales-up-1 mr-3 text-gray"></i><span>Charts</span></a></li>
              <li class="sidebar-list-item"><a href="tables.html" class="sidebar-link text-muted"><i class="o-table-content-1 mr-3 text-gray"></i><span>Tables</span></a></li>
              <li class="sidebar-list-item"><a href="forms.html" class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>Forms</span></a></li>
          <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3 text-gray"></i><span>Pages</span></a>
            <div id="pages" class="collapse">
              <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page one</a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page two</a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page three</a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page four</a></li>
              </ul>
            </div>
          </li>
              <li class="sidebar-list-item"><a href="login.html" class="sidebar-link text-muted"><i class="o-exit-1 mr-3 text-gray"></i><span>Login</span></a></li>
        </ul>
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">EXTRAS</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-database-1 mr-3 text-gray"></i><span>Demo</span></a></li>
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-imac-screen-1 mr-3 text-gray"></i><span>Demo</span></a></li>
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-paperwork-1 mr-3 text-gray"></i><span>Demo</span></a></li>
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3 text-gray"></i><span>Demo</span></a></li>
        </ul>
      </div>-->
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          
          
          <section class="py-5">

            <center>
            <div class="row text-dark">
              <div class="col-lg-4 mb-4 mb-lg-0">
                <a href="palembang/pilih_prapasca.php" class="card bg-hover-gradient-violet">
                  <div class="content d-flex flex-column justify-content-between p-4">                   
                      <div class="text-uppercase">
                        <div class="font-weight-bold d-block"><h4>Palembang</h4></div>
                      </div>
                   
                  </div>
                </a>
              </div>

              <div class="col-lg-4 mb-4 mb-lg-0">
                 <a href="bengkulu/pilih_prapasca.php" class="card bg-hover-gradient-red">
                  <div class="content d-flex flex-column justify-content-between p-4">
                   
                      <div class="text-uppercase">
                        <div class="font-weight-bold d-block"><h4>Bengkulu</h4></div>
                      </div>
                   
                  </div>
              </a>
              </div>

             <div class="col-lg-4 mb-4 mb-lg-0">
                 <a href="jambi/pilih_prapasca.php" class="card bg-hover-gradient-green">
                  <div class="content d-flex flex-column justify-content-between p-4">
                   
                      <div class="text-uppercase">
                        <div class="font-weight-bold d-block"><h4>Jambi</h4></div>
                      </div>
                   
                  </div>
                </div>
             </a>
            </div>
            </center>
        
            <center>
            <div class="row text-dark">
              <div class="col-lg-4 mb-4 mb-lg-0">
                <br>
                 <a href="babel/pilih_prapasca.php" class="card bg-hover-gradient-green">
                  <div class="content d-flex flex-column justify-content-between p-4">
                   
                      <div class="text-uppercase">
                        <div class="font-weight-bold d-block"><h4>babel</h4></div>
                      </div>
                   
                  </div>
                </a>
              </div>

              <div class="col-lg-4 mb-4 mb-lg-0">
                <br>
                 <a href="lampung/pilih_prapasca.php" class="card bg-hover-gradient-violet">
                  <div class="content d-flex flex-column justify-content-between p-4">
                   
                      <div class="text-uppercase">
                        <div class="font-weight-bold d-block"><h4>Lampung</h4></div>
                      </div>
                   
                 
                </div>
              </a>
            </div>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>