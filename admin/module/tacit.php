
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
              <form method="post" name="login" action="?module=tambahtacit">
                <br>
                <table >
                  <tr>
                    <center><td> <input type='submit' name='tambah' value='Isi Tacit Knowledge'> </td>
                  </tr>
                </table>
              </form>
              <br>
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tacit Knowledge Saya</h6>
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
                </tr>

        <?php
          $dbconnect = mysqli_connect('localhost','root','','cesar');
          $nip=$_SESSION['nip'];
        ?>
        <?php
          $query1 = mysqli_query($dbconnect, "SELECT * FROM tacit_knowledge where NIP='$nip' order by id_tacit desc");
          while ($data = mysqli_fetch_assoc($query1)){
            echo "
            <tr>
            
            <td>".$data['judul']."</td>
            <td>".$data['isi_tacit']."</td>
              <td>".$data['tanggal']."</td>
            <td>".$data['NIP']."</td>
            <td>".$data['validasi']."</td>
            </tr>
            ";}
            ?>
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
