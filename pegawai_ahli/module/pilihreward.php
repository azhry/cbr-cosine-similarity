<?php
$id=$_SESSION['user_id'];
$sql="SELECT * FROM item_reward order by id_item desc";
$query1 = mysqli_query($dbconnect,$sql);

$sql1="SELECT * FROM user where user_id='$id'";
$query2 = mysqli_query($dbconnect,$sql1);
?>

<?php
while ($data1 = mysqli_fetch_array($query2)){
echo "Point Anda Saat Ini : ".$data1['point']." Point";
}
?>
<div class="row">

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
                  <a href="?module=ambil_reward&id_item=<?php echo $data['id_item']; ?>" class="btn btn-success"> Ambil Reward</a>
                </div>
              </div>


          </div>
<?php } ?>
          
      </div>