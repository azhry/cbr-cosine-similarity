
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

  <h2>Reward</h2 >
              <a href="?module=buat_item" class="btn btn-success"> Tambah Item</a>
              <br><br>
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Item Reward</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                  
                      <th><center> Foto </th>
                      <th><center> Nama Item </th>
                      <th><center> Stok</th>
                      <th><center>Harga Point</th>
                      <th><center>Keterangan</th>
                      <th><center>Aksi</th>
                </tr>

        <?php
          $dbconnect = mysqli_connect('localhost','root','','cesar');
        ?>
        <?php
          $query1 = mysqli_query($dbconnect, "SELECT * FROM item_reward order by id_item desc");
          while ($data = mysqli_fetch_assoc($query1)){
            ?>
            
            <tr>
            
            <td><center><img src="<?php echo $data['foto']; ?>" width="100px" height="100px"></td>
            <td><center><?php echo $data['nama_item']; ?></td>
            <td><center><?php echo $data['stok']; ?> Buah</td>
            <td><center><?php echo $data['harga_point']; ?> Point</td>  
              <td><center><?php echo $data['keterangan']; ?> </td>
              <td><center><a href="?module=edit_item_reward&id_item=<?php echo $data['id_item'] ?>" class="btn btn-success"> Edit Item Reward</a> <a href="?module=tambah_stok&id_item=<?php echo $data['id_item'] ?>" class="btn btn-success"> Tambah Stok</a></td>
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
