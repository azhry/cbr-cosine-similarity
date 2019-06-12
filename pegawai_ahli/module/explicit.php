
<?php
  $dbconnect = mysqli_connect('localhost','root','','cesar');
?> 
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <h2>Explicit Knowledge</h2 >
              <form method="post" name="login" action="?module=tambahexplicit">
                <br>
                <table >
                  <tr>
                    <center><td> <input type='submit' name='tambah' value='Isi Explicit Knowledge'> </td>
                  </tr>
                </table>
              </form>
              <br>
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Explicit Knowledge Saya</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                  
                  <th><center> Judul Knowledge </th>
                    <th><center> Isi Knowledge </th>
                      <th><center> Nama File</th>
                      <th><center> File</th>
                      <th><center> tanggal </th>
                  <th><center> NIP</th>
                </tr>

        <?php
          $dbconnect = mysqli_connect('localhost','root','','cesar');
          $nip=$_SESSION['nip'];
        ?>
        <?php
          $query1 = mysqli_query($dbconnect, "SELECT * FROM explicit where NIP='$nip' order by id_explicit desc");
          while ($data = mysqli_fetch_assoc($query1)){
            ?>
            
            <tr>
            
            <td><?php echo $data['judul']; ?></td>
            <td><?php echo $data['isi_explicit']; ?></td>
            <td><?php echo $data['nama_file']; ?></td>
            <td><a target="blank" href="<?php echo $data['file']; ?>">Download</a></td>  
              <td><?php echo $data['tanggal']; ?></td>
            <td><?php echo $data['NIP']; ?></td>
            </tr>
            <?php }?>
          </table>
            </div>
              <div class="col-md-4">
            </div>
        </div>
          <div class="row">
            <div class="col-md-12">
            </div>
          </div>
        </body>
        </html>

      </div>
</div>

</body>
</html>
