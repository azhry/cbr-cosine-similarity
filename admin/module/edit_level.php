<?php
$id=$_GET['user_id'];
$sql="SELECT * FROM user where user_id='$id'";
$query=mysqli_query($dbconnect,$sql);
$data=mysqli_fetch_array($query);


?>
<span>Edit User</span>
<br>
  <div class="outter-form-login">
     <form method="post" action="?module=update_level" enctype="multipart/form-data">
      <input type="hidden" name="user_id" value="<?php echo $data['user_id'] ?>">
          <div class="form-group">
                  <label>Level</label>
                  <select class="form-control" name="level">
                  <option  <?php if( $data['level'] == 'pegawai'){echo "selected"; } ?> value="pegawai">Pegawai</option>
                  <option  <?php if( $data['level'] == 'pegawai_ahli'){echo "selected"; } ?> value="pegawai_ahli">Pegawai Ahli</option>
                    
                  </select>
                </div>

          
          <input type="submit" class="btn btn-block btn-success" value="Edit Level">
          <div class="text-center forget">
            <p>Back To <a href="index.php">Home</a></p>
          </div>
        </form>
      </div>
      </div>
