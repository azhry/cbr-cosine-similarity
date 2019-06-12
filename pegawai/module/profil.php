
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

  <h2>Profil</h2 >
  <br>
  <a href="?module=edit_profil" class="btn btn-success"> Edit Profil</a>
  <br><br>
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Profil</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                  
                      <th><center> Foto </th>
                      <th><center> Nama </th>
                      <th><center> Username</th>
                      <th><center> Password</th>
                      <th><center>NIP</th>
                        <th><center>Jenis Kelamin</th>
                          <th><center>Alamat</th>
                            <th><center>Jabatan</th>
                              <th><center>Level Akun</th>
                                <th><center>Point Saat Ini</th>
                      
                </tr>

        <?php
          $dbconnect = mysqli_connect('localhost','root','','cesar');
          $id=$_SESSION['user_id'];
        ?>
        <?php
          $query1 = mysqli_query($dbconnect, "SELECT * FROM user where user_id='$id' order by user_id desc");
          while ($data = mysqli_fetch_assoc($query1)){
            ?>
            
            <tr>
            
            <td><center><a target="blank" href="<?php echo $data['foto']; ?>"><img src="<?php echo $data['foto']; ?>" width="100px" height="100px"></a></td>
            <td><center><?php echo $data['nama']; ?></td>
            <td><center><?php echo $data['username']; ?></td>
            <td><center><?php echo $data['password']; ?> </td>  
              <td><center><?php echo $data['nip']; ?> </td>
                <td><center><?php echo $data['jenis_kelamin']; ?> </td>
                  <td><center><?php echo $data['alamat']; ?> </td>
                    <td><center><?php echo $data['jabatan']; ?> </td>
                      <td><center><?php echo $data['level']; ?> <br> 
                        
                      </td>
                        <td><center><?php echo $data['point']; ?> Point</td>
              
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
