<?php
$id=$_SESSION['user_id'];
$idk=$_GET['id_item'];
$sql="SELECT * FROM item_reward where id_item='$idk'";
$query1 = mysqli_query($dbconnect,$sql);

$sql1="SELECT * FROM user where user_id='$id'";
$query2 = mysqli_query($dbconnect,$sql1);
?>
<center>
<?php
while ($data1 = mysqli_fetch_array($query2)){
echo "Point Anda Saat Ini : ".$data1['point']." Point";
}
?>
<div class="row">
<div class="col-lg-4"></div>
<?php
while ($data = mysqli_fetch_array($query1)){
?>
<div class="col-lg-4">

<div class="card shadow mb-4">
                <div class="card-header py-3">
                	<center>
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['nama_item']; ?></h6>
                  <h6 class="m-0 font-weight-bold text-primary">Stok (<?php echo $data['stok']; ?> Buah)</h6>
                </div>
                <div class="card-body">
                	<center>
                  <img src="<?php echo $data['foto']; ?>" width="200px" height="100px">
                  <br>
                  Keterangan :
                  <br>
                  <?php echo $data['keterangan']; ?>
                  <br>
                  Harga :
                  <br>
                  <?php echo $data['harga_point']; ?> Point
                </div>
                <div class="card-header py-3">
                	<center>
                    <form action="?module=proses_reward" method="post">
                  Jumlah Yang Ingin Diambil :
                  <input type="number" name="jumlah" required="required" class="validate">
                  <input type="hidden" name="id_item" value="<?php echo $data['id_item']; ?>">
                  <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                  <input type="hidden" name="status" value="Belum Diambil">
                  <input type="hidden" name="tgl_ambil" value="<?php echo date('Y-m-d'); ?>">
                  <br><br>
                  <input type="submit" value="Deal" class="btn btn-success">
                  <a href="?module=pilihreward" class="btn btn-danger"> Kembali</a>
                    </form>  
                  
                </div>
              </div>


          </div>
          <div class="col-lg-4"></div>
<?php } ?>
          
      </div>