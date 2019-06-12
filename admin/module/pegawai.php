<?php
session_start();
if(!isset($_SESSION['user_login']) || (isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'member')) ?>
<?php
  $dbconnect = mysqli_connect('localhost','root','','project');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dinas Kelautan Dan Perikanan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./../assets/css/bootstrap.min.css">
  <script src="./../assets/jquery-ui-1.11.4/jquery.min.js"></script>
  <script src="./../assets/js/bootstrap.min.js"></script>
  <script src="./../assets/chartjs/Chart.bundle.js"></script>

  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;}
    }

    <?php $query1 = mysqli_query($dbconnect, "SELECT * from data");
     ?>
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2><img src="./../image/logoo.png" width="150px"></img></h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="./index.php">Angka Konsumsi Ikan</a></li>
        <li><a href="./users.php">Data Users</a></li>
        <li><a href="./proposal.php">Data Laporan</a></li>
        <li><a href="./../logout.php">Logout</a></li>

      <br>
    </div>
    <br>


    <div class="col-sm-9">
      <div class="well">
        <center>
          <div class="container">
            <div class="col-md-8">

                <h2>Data User Aktif</h2 >
              <form action='tambah.php' method='POST'>
                <br>
                <table >
                  <tr>
                    <center><td> <input type='submit' name='tambah' value='Register Member'> </td>
                  </tr>
                </table>
              </form>
              <br>
              <table  border='1' Width='600' >
                <tr>
                  <th><center> ID </th>
                  <th><center> Nama Instansi</th>
                  <th><center> Username </th>
                  <th><center> Password </th>
                  <th><center> Level User </th>
                </tr>

        <?php
          $dbconnect = mysqli_connect('localhost','root','','project');
        ?>
        <?php
          $query1 = mysqli_query($dbconnect, "SELECT * FROM users");
          while ($data = mysqli_fetch_assoc($query1)){
            echo "
            <tr>
            <td>".$data['id_user']."</td>
            <td>".$data['nama']."</td>
            <td>".$data['username']."</td>
            <td>".$data['password']."</td>
            <td>".$data['level_user']."</td>
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
