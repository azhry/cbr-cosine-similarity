
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

  <h2>Tacit Knowledge</h2 >
              
              </form>
              <br>
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tacit Knowledge Belum Valid</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                  
                  <th><center> Judul Knowledge </th>
                    <th><center> Isi Knowledge </th>
                      <th><center> tanggal </th>
                  <th><center> NIP</th>
                  <th><center> Validasi</th>
                  <th><center> Aksi</th>  
                </tr>

        <?php
          $dbconnect = mysqli_connect('localhost','root','','cesar');
          
        ?>
        <?php
          $query1 = mysqli_query($dbconnect, "SELECT * FROM tacit_knowledge where validasi='Belum Valid' order by id_tacit desc");
          while ($data = mysqli_fetch_array($query1)){
            ?>
            
            <tr>
            
            <td><center><?php echo $data['judul']; ?></td>
            <td><center><?php echo $data['isi_tacit']; ?></td>
              <td><center><?php echo $data['tanggal']; ?></td>
            <td><center><?php echo $data['NIP']; ?></td>
            <td><center><?php echo $data['validasi']; ?></td>
            <td><center><a class="btn btn-success" href="?module=revisi_tacit&id_tacit=<?php echo $data['id_tacit']; ?>"> Revisi</a></td>  
            </tr>
            <?php } ?>
          </table>

        </body>
        </html>

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tacit Knowledge Valid</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                  
                  <th><center> Judul Knowledge </th>
                    <th><center> Isi Knowledge </th>
                      <th><center> tanggal </th>
                  <th><center> NIP</th>
                  <th><center> Validasi</th> 
                  <th><center> Aksi</th>  
                </tr>

        <?php
          $dbconnect = mysqli_connect('localhost','root','','cesar');
          
        ?>
        <?php
          $query2 = mysqli_query($dbconnect, "SELECT * FROM tacit_knowledge where validasi='Valid' order by id_tacit desc");
          while ($data1 = mysqli_fetch_array($query2)){
            ?>
            
            <tr>
            
            <td><center><?php echo $data1['judul']; ?></td>
            <td><center><?php echo $data1['isi_tacit']; ?></td>
              <td><center><?php echo $data1['tanggal']; ?></td>
            <td><center><?php echo $data1['NIP']; ?></td>
            <td><center><?php echo $data1['validasi']; ?></td>
              <td><center><a class="btn btn-success" href="?module=revisi_tacit&id_tacit=<?php echo $data1['id_tacit']; ?>"> Revisi</a></td>
            </tr>
            <?php } ?>
          </table>
            
        </body>
        </html>

      </div>
</div>
      </div>
</div>



</body>
</html>
