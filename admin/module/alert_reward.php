
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
              
              <br>
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Reward(Belum Diambil)</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                  
                      <th><center> Foto </th>
                      <th><center> Nama Reward </th>
                      <th><center> Harga Point</th>
                      <th><center>Jumlah Diambil</th>
                      <th><center>Total</th>
                      <th><center>Diambil Pada Tanggal</th>
                      <th><center>Status</th>
                </tr>

        <?php
          $dbconnect = mysqli_connect('localhost','root','','cesar');
        ?>
        <?php
          $query1 = mysqli_query($dbconnect, "SELECT * FROM reward join user on reward.user_id=user.user_id join item_reward on reward.id_item=item_reward.id_item where reward.status='Belum Diambil' order by reward.id_reward desc");
          while ($data = mysqli_fetch_assoc($query1)){
            ?>
            
            <tr>
            
            <td><center><img src="<?php echo $data['foto']; ?>" width="100px" height="100px"></td>
            <td><center><?php echo $data['nama_item']; ?></td>
            <td><center><?php echo $data['harga_point']; ?> Point</td>
            <td><center><?php echo $data['jumlah']; ?> Buah</td>  
              <td><center><?php echo $data['total']; ?> Point</td>
            <td><center><?php echo $data['tgl_ambil']; ?></td>
            <td><center><?php echo $data['status']; ?> <br>
              <a href="?module=reward_diambil&id_reward=<?php echo $data['id_reward'] ?>" class="btn btn-warning"> Ubah Status</a>
            </td>
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
