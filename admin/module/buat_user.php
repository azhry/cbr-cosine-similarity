<?php
$que="SELECT * from jabatan";
$sq=mysqli_query($dbconnect,$que);
?>
<span>Buat User</span>
<br>
  <div class="outter-form-login">
     <form method="post" action="?module=insert_user" enctype="multipart/form-data">
      
           <div class="form-group">
            <span>Nama</span>
            <input type="text" class="form-control" name="nama" >
          </div>

          <div class="form-group">
            <span>Username</span>
            <input type="text" class="form-control" name="username" >
          </div>

          <div class="form-group">
            <span>Password</span>
            <input type="password" class="form-control" name="password" >
          </div>

          <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control" name="jabatan">
                    <?php while($kat = mysqli_fetch_array($sq)){
                                        ?>
                                        <option value="<?php echo $kat['jabatan'] ?>"><?php echo $kat['jabatan']; ?></option>
                    <?php }?>
                  </select>
                </div>

          <div class="form-group">
            <span>NIP</span>
            <input type="number" class="form-control" name="nip">
          </div>

          <div class="form-group">
            <span>Jenis Kelamin</span>
            <br>
            <input type="radio"  name="jenis_kelamin" value="pria"><label>Pria</label>
            <input type="radio"  name="jenis_kelamin" value="wanita"><label>Wanita</label>  
          </div>


          <div class="form-group">
            <span>Alamat</span>
            <textarea name="alamat" class="form-control"></textarea>
          </div>

          <div class="form-group">
                  <label>Level Akun</label>
                  <select class="form-control" name="level">
                  <option value="pegawai">Pegawai</option>
                    <option value="pegawai_ahli">Pegawai Ahli</option>
                  </select>
                </div>

          <div class="form-group">
            <input type="file" class="form-control" name="foto">
          </div>
         
          <input type="submit" class="btn btn-block btn-success" value="Buat User">
          <div class="text-center forget">
            <p>Back To <a href="index.php">Home</a></p>
          </div>
        </form>
      </div>
      </div>
