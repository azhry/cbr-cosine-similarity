
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

  <h2>Problem Solving</h2>
              <form method="post" name="login" action="?module=tambahgejala">
                <br>
                <table >
                  <tr>
                    <center><td> <input type='submit' name='tambah' value='Tambah Gejala'> </td>
                  </tr>
                </table>
              </form>
              <br>
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Gejala</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                  <th><center> id</th>
                  <th><center> Gejala</th>
                    <th><center> Representasi</th>
                      <th><center> aksi </th>
                 
                </tr>

        <?php
          $dbconnect = mysqli_connect('localhost','root','','cesar');
        ?>
        <?php
          $query1 = mysqli_query($dbconnect, "SELECT * FROM gejala");
          while ($data = mysqli_fetch_assoc($query1)){
            echo "
            <tr>
            <td>".$data['id']."</td>
            <td>".$data['gejala']."</td>
            <td>".$data['representasi']."</td>
            <td></td>
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
