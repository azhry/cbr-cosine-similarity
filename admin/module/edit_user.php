<?php
$id=$_GET['user_id'];
$sql="SELECT * FROM user where user_id='$id'";
$query=mysqli_query($dbconnect,$sql);
$data=mysqli_fetch_array($query);

$que="SELECT * from jabatan";
$sq=mysqli_query($dbconnect,$que);
?>
<span>Edit User</span>
<br>
  <div class="outter-form-login">
     <form method="post" action="?module=update_user" enctype="multipart/form-data">
      <input type="hidden" name="user_id" value="<?php echo $data['user_id']; ?>">

           <div class="form-group">
            <span>Nama</span>
            <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
          </div>

          <div class="form-group">
            <span>Username</span>
            <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>">
          </div>

          <div class="form-group">
            <span>Password</span>
            <input type="text" class="form-control" name="password" value="<?php echo $data['password']; ?>">
          </div>

          <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control" name="jabatan">
                    <?php while($kat = mysqli_fetch_array($sq)){
                                        ?>
                                        <option  <?php if( $data['jabatan'] == $kat['jabatan']){echo "selected"; } ?> value="<?php echo $kat['jabatan'] ?>"><?php echo $kat['jabatan']; ?></option>
                    <?php }?>
                  </select>
                </div>

          <div class="form-group">
            <span>NIP</span>
            <input type="text" class="form-control" name="nip" value="<?php echo $data['nip']; ?>">
          </div>

          <div class="form-group">
            <span>Jenis Kelamin</span>
            <br>
            <?php if($data['jenis_kelamin']=='pria'){ ?>
            <input type="radio"  name="jenis_kelamin" value="pria" checked="checked"><label>Pria</label>
            <input type="radio"  name="jenis_kelamin" value="wanita"><label>Wanita</label>
          <?php } else { ?>
            <input type="radio" name="jenis_kelamin"  value="pria" ><label>Pria</label>
            <input type="radio" name="jenis_kelamin"  value="wanita" checked="checked"><label>Wanita</label>
          <?php }?>  
          </div>


          <div class="form-group">
            <span>Alamat</span>
            <textarea name="alamat" class="form-control"><?php echo $data['alamat']; ?></textarea>
          </div>

          <span>Foto Lama :</span>
          <img src="<?php echo $data['foto'] ?>" width="100px" height="100px">
          <br><br>
          <div class="form-group">
            <input type="file" class="form-control" name="foto">
          </div>
         
          <input type="submit" class="btn btn-block btn-success" value="Edit User">
          <div class="text-center forget">
            <p>Back To <a href="index.php">Home</a></p>
          </div>
        </form>
      </div>
      </div>
