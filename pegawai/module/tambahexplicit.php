

<div class="outter-form-login">
     <form method="post" action="?module=registerexplicit" enctype="multipart/form-data">
      
           <div class="form-group">
            <input type="text" class="form-control" name="judul" placeholder="Judul">
          </div>
         
          <div class="form-group">
            <textarea name="isi_explicit" class="form-control" placeholder="Isi Explicit"></textarea>
          </div>

             <div class="form-group">
            <input type="text" class="form-control" name="tanggal" placeholder="Tanggal" value="<?php echo date("Y-m-d"); ?>" readonly="readonly">
          </div>
        
        <div class="form-group">
            <input type="text" class="form-control" name="NIP" placeholder="NIP" value="<?php echo $_SESSION['nip']; ?>" readonly="readonly">
          </div>

           <div class="form-group">
            <td align="right"><b>Pilih File</b>
              <input type="file" name="file"  class="form-control" required/>
            </td>
          </div>
          <input type="submit" class="btn btn-block btn-success" value="Submit">
          </div>
        </form>

        
        
          <div class="text-center forget">
            <p>Back To <a href="index.php">Home</a></p>
          </div>
      </div>
      </div>
