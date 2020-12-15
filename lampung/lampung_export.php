  
 
  <?php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=rekap_jambi.xls");
  ?>

   <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <center><h2>AREA LAMPUNG</h2></center>
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
                        include_once ("../koneksi.php");

                        $query = "SELECT * FROM rekap_kartu where area='lampung'";
                        $hasil = mysqli_query ($koneksi,$query);

                        $no = 1;

                        if (!$hasil)
                          die ("Permintaan gagal!!!");

                        while ($lampung=mysqli_fetch_array($hasil))
                        {
                        ?>
                        <tr>
                          <td><?php echo $no++?></td>
                          <td><?php echo $lampung['no_jaringan']; ?></td>
                          <td><?php echo $lampung['pelanggan']; ?></td>
                          <td><?php echo $lampung['lokasi']; ?></td>
                          <td><?php echo $lampung['provider']; ?></td>
                          <td><?php echo $lampung['no_kartu']; ?></td>
                          <td><?php echo $lampung['jenis_provider']; ?></td>
                          <td><?php echo $lampung['status_layanan']; ?></td>
                          <td><?php echo $lampung['perangkat']; ?></td>
                          <td><?php echo $lampung['awal_pengisian']; ?></td>
                          <td><?php echo $lampung['masa_aktif']; ?></td>
                          <td><?php echo $lampung['status']; ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
            </table>