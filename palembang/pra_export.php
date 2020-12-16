  
 
  <?php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Rekap Prabayar Palembang.xls");
  ?>

   <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <table border="1">
            <center><h2>AREA PALEMBANG</h2></center>
            
            
                      <thead>
                        <tr>
                          <th>NO</th>
                          <th>No Jaringan</th>
                          <th>Pelanggan</th>
                          <th>Lokasi</th>
                          <th>Provider</th>
                          <th>No. Kartu</th>
                          <th>Status Layanan</th>
                          <th>Perangkat</th>
                          <th>Awal Pengisian Kuota</th>
                          <th>Masa Aktif</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include_once ("../koneksi.php");

                        $query = "SELECT * FROM plg_pra ";
                        $hasil = mysqli_query ($koneksi,$query);

                        $no = 1;

                        if (!$hasil)
                          die ("Permintaan gagal!!!");

                        while ($plg=mysqli_fetch_array($hasil))
                        {
                        ?>
                        <tr>
                          <td><?php echo $no++?></td>
                          <td><?php echo $plg['no_jaringan']; ?></td>
                          <td><?php echo $plg['pelanggan']; ?></td>
                          <td><?php echo $plg['lokasi']; ?></td>
                          <td><?php echo $plg['provider']; ?></td>
                          <td><?php echo $plg['no_kartu']; ?></td>
                          <td><?php echo $plg['status_layanan']; ?></td>
                          <td><?php echo $plg['perangkat']; ?></td>
                          <td><?php echo date('d-m-y', strtotime($plg['awal_pengisian'])); ?></td>
                          <td><?php echo date('d-m-y', strtotime($plg['masa_aktif'])); ?></td>
                          <td><?php echo $plg['status']; ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
           
            </table>