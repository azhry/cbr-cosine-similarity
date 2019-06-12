<?php
$id=$_GET['id_item'];
$sql="SELECT * FROM item_reward where id_item='$id'";
$query=mysqli_query($dbconnect,$sql);
$data=mysqli_fetch_array($query);
?>
<span>Tambah Stok Item Reward</span>
<br>
  <div class="outter-form-login">
     <form method="post" action="?module=update_item" enctype="multipart/form-data">
      <input type="hidden" name="id_item" value="<?php echo $data['id_item']; ?>">

           <div class="form-group">
            <span>Nama Item</span>
            <input type="text" class="form-control" name="nama_item" value="<?php echo $data['nama_item'] ?>">
          </div>

          <div class="form-group">
            <span>Harga Point</span>
            <input type="number" class="form-control" name="harga_point" value="<?php echo $data['harga_point']; ?>">
          </div>

          <div class="form-group">
            <span>Keterangan</span>
            <textarea name="keterangan" class="form-control"><?php echo $data['keterangan']; ?></textarea>
          </div>
          <span>Foto Lama :</span>
          <img src="<?php echo $data['foto'] ?>" width="100px" height="100px">
          <br><br>
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
