<?php
$id=$_GET['id_item'];
$sql="SELECT * FROM item_reward where id_item='$id'";
$query=mysqli_query($dbconnect,$sql);
$data=mysqli_fetch_array($query);
?>
<span>Tambah Stok Item Reward</span>
  <div class="outter-form-login">
     <form method="post" action="?module=tambahkan_stok">
      <input type="hidden" name="id_item" value="<?php echo $data['id_item']; ?>">

           <div class="form-group">
            <input type="number" class="form-control" name="stok">
          </div>
         
          <input type="submit" class="btn btn-block btn-success" value="Tambah Stok">
          <div class="text-center forget">
            <p>Back To <a href="index.php">Home</a></p>
          </div>
        </form>
      </div>
      </div>
