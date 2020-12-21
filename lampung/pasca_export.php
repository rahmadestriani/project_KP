  
 
  <?php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Rekap Pascabayar Lampung.xls");
  ?>

   <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <table border="1">
            <center><h2>AREA LAMPUNG</h2></center>
            
            
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
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include_once ("../koneksi.php");

                        $query = "SELECT * FROM lampung_pasca ";
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
                          <td><?php echo $lampung['status_layanan']; ?></td>
                          <td><?php echo $lampung['perangkat']; ?></td>
                      
                          <td><?php echo $lampung['status']; ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
           
            </table>