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
