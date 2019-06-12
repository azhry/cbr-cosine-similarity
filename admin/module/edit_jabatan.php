<?php
$id=$_GET['id_jabatan'];
$sql="SELECT * FROM jabatan where id_jabatan='$id'";
$query=mysqli_query($dbconnect,$sql);
$data=mysqli_fetch_array($query);

?>

<span>Edit Jabatan</span>
<br>
  <div class="outter-form-login">
     <form method="post" action="?module=update_jabatan" enctype="multipart/form-data">
      <input type="hidden" name="id_jabatan" value="<?php echo $data['id_jabatan'] ?>">
          <div class="form-group">
            <span>Jabatan</span>
            <input type="text" class="form-control" name="jabatan" value="<?php echo $data['jabatan'] ?>">
          </div>

          
          <input type="submit" class="btn btn-block btn-success" value="Edit Jabatan">
          <div class="text-center forget">
            <p>Back To <a href="index.php">Home</a></p>
          </div>
        </form>
      </div>
      </div>
