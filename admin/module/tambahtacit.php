  <div class="outter-form-login">
     <form method="post" action="?module=registertacit">
      
           <div class="form-group">
            <input type="text" class="form-control" name="judul" placeholder="Judul">
          </div>
         
          <div class="form-group">
            <textarea name="isi_tacit" class="form-control" placeholder="isi tacit"></textarea>
          </div>
           <div class="form-group">
            <input type="text" class="form-control" name="tanggal" placeholder="tanggal" value="<?php echo date("Y-m-d"); ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="NIP" placeholder="NIP" value="<?php echo $_SESSION['nip']; ?>" readonly="readonly">
          </div>
          <input type="submit" class="btn btn-block btn-success" value="Tambah Tacit Knowledge">
          <div class="text-center forget">
            <p>Back To <a href="index.php">Home</a></p>
          </div>
        </form>
      </div>
      </div>
