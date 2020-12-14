  
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=rekap_jambi.xls");
  ?>

        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <center><h2>AREA JAMBI</h2></center>
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

                        $query = "SELECT * FROM rekap_kartu where area='jambi'";
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
                          <td><?php echo $plg['jenis_provider']; ?></td>
                          <td><?php echo $plg['status_layanan']; ?></td>
                          <td><?php echo $plg['perangkat']; ?></td>
                          <td><?php echo $plg['awal_pengisian']; ?></td>
                          <td><?php echo $plg['masa_aktif']; ?></td>
                          <td><?php echo $plg['status']; ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
            </table>