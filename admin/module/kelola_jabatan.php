
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

  <h2>Jabatan</h2 >
              <a href="?module=tambah_jabatan" class="btn btn-success"> Tambah Jabatan</a>
              <br><br>
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Jabatan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                  
                      <th><center> ID Jabatan </th>
                      <th><center> Jabatan </th>
                      <th><center>Aksi</th>
                </tr>

        <?php
          $dbconnect = mysqli_connect('localhost','root','','cesar');
        ?>
        <?php
          $query1 = mysqli_query($dbconnect, "SELECT * FROM jabatan order by id_jabatan desc");
          while ($data = mysqli_fetch_assoc($query1)){
            ?>
            
            <tr>
            
            <td><center><?php echo $data['id_jabatan']; ?></td>
            <td><center><?php echo $data['jabatan']; ?></td>
              <td><center><a href="?module=edit_jabatan&id_jabatan=<?php echo $data['id_jabatan'] ?>" class="btn btn-success"> Edit Jabatan</a></td>
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
