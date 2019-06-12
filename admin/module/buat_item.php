<span>Buat Item Reward</span>
<br>
  <div class="outter-form-login">
     <form method="post" action="?module=insert_item" enctype="multipart/form-data">
      
           <div class="form-group">
            <span>Nama Item</span>
            <input type="text" class="form-control" name="nama_item" >
          </div>

          <div class="form-group">
            <span>Harga Point</span>
            <input type="number" class="form-control" name="harga_point">
          </div>

          <div class="form-group">
            <span>Stok</span>
            <input type="number" class="form-control" name="stok">
          </div>

          <div class="form-group">
            <span>Keterangan</span>
            <textarea name="keterangan" class="form-control"></textarea>
          </div>
          <span>Foto :</span>
          <br>
          <div class="form-group">
            <input type="file" class="form-control" name="foto">
          </div>
         
          <input type="submit" class="btn btn-block btn-success" value="Edit Item Reward">
          <div class="text-center forget">
            <p>Back To <a href="index.php">Home</a></p>
          </div>
        </form>
      </div>
      </div>
