  
 
  <?php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=rekap_lampung.xls");
  ?>

   <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <center><h2>AREA BENGKULU</h2></center>
            <table class="table table-striped table-bordered table-condensed">
                      <thead>
                        <tr>
                          <th>NO</th>
                          <th>No Jaringan</th>
                          <th>Pelanggan</th>
                          <th>Lokasi</th>
                          <th>Provider</th>
                          <th>No. Kartu</th>
                          <th>Jenis Provider</th>
                          <th>Status Layanan</th>
                          <th>Perangkat</th>
                          <th>Awal Pengisian Kuota</th>
                          <th>Masa Aktif</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include_once ("koneksi.php");

                        $query = "SELECT * FROM rekap_kartu where area='bengkulu'";
                        $hasil = mysqli_query ($koneksi,$query);

                        $no = 1;

                        if (!$hasil)
                          die ("Permintaan gagal!!!");

                        while ($bengkulu=mysqli_fetch_array($hasil))
                        {
                        ?>
                        <tr>
                          <td><?php echo $no++?></td>
                          <td><?php echo $bengkulu['no_jaringan']; ?></td>
                          <td><?php echo $bengkulu['pelanggan']; ?></td>
                          <td><?php echo $bengkulu['lokasi']; ?></td>
                          <td><?php echo $bengkulu['provider']; ?></td>
                          <td><?php echo $bengkulu['no_kartu']; ?></td>
                          <td><?php echo $bengkulu['jenis_provider']; ?></td>
                          <td><?php echo $bengkulu['status_layanan']; ?></td>
                          <td><?php echo $bengkulu['perangkat']; ?></td>
                          <td><?php echo $bengkulu['awal_pengisian']; ?></td>
                          <td><?php echo $bengkulu['masa_aktif']; ?></td>
                          <td><?php echo $bengkulu['status']; ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
            </table>