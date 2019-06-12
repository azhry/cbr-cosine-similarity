<?php
$id=$_GET['id_tacit'];
$a="SELECT * FROM tacit_knowledge join user on tacit_knowledge.NIP=user.nip where id_tacit='$id'";
$query=mysqli_query($dbconnect,$a);

$b="SELECT * FROM komentar_tacit where id_tacit='$id' order by id_komentartacit desc";
$query1=mysqli_query($dbconnect,$b);
?>
<div class="row">
<?php
while ($data = mysqli_fetch_array($query)){
?>
            <div class="col-lg-12">
			<div class="card shadow mb-4">
                <div class="card-header py-3">
                	<i class="fas fa-user fa-right"></i> <span><?php echo $data['nama']; ?> (NIP : <?php echo $data['nip']; ?>)</span>
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['judul']; ?></h6>
                </div>
                <div class="card-body">
                  <?php echo $data['isi_tacit']; ?>
                </div>
              </div>
              <a href="?module=tacitumum" class="btn btn-danger btn-user"> Kembali</a>
            </div>
<?php }?>

<div class="col-lg-2"></div>

<div class="col-lg-8">
            <form class="user" action="?module=insert_komentartacit" method="post">
            	<div class="form-group">
                      <input type="hidden" name="id_tacit" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Komentar" value="<?php echo $id; ?>">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="nip" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Komentar" value="<?php echo $_SESSION['nip']; ?>">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="nama" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Komentar" value="<?php echo $_SESSION['nama']; ?>">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="tgl_komentar" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Komentar" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <div class="form-group">
                      <input type="text" name="isi_komentar" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Komentar">
                    </div>
                    <input type="submit" value="Kirim Komentar" class="btn btn-primary btn-user btn-block">
                  </form>
                  <br>
              
              </div>
<div class="col-lg-2"></div>
<?php
while ($data1 = mysqli_fetch_array($query1)){
?>
<?php if($_SESSION['nama'] == $data1['nama']) {?>

<div class="col-lg-12">
			<div class="card shadow mb-4">
                <div class="card-header py-3">
                	<i class="fas fa-user text-primary"></i> <span><?php echo $data1['nama']; ?> (NIP : <?php echo $data1['nip']; ?>) Pada Tanggal : <?php echo $data1['tgl_komentar']; ?></span>
                </div>
                <div class="card-body">
                  <?php echo $data1['isi_komentar']; ?>
                </div>
              <div class="card-header py-3">
              	<?php if($data1['isi_komentar']=="Komentar Telah Dihapus") {?>
              	<?php } else { ?>	
                <a href="?module=hapus_komentartacit&id_komentartacit=<?php echo $data1['id_komentartacit'];?>">	
                  <i class="fas fa-trash fa-2x text-danger"></i> 
                </a>
                <span>Hapus Komentar</span>
            <?php }?>
                </div>
              </div>
              
</div>
<?php } else { ?>
<div class="col-lg-12">
			<div class="card shadow mb-4">
                <div class="card-header py-3">
                	<i class="fas fa-user fa-right"></i> <span><?php echo $data1['nama']; ?> (NIP : <?php echo $data1['nip']; ?>) Pada Tanggal : <?php echo $data1['tgl_komentar']; ?></span>
                </div>
                <div class="card-body">
                  <?php echo $data1['isi_komentar']; ?>
                </div>
              </div>
</div>	
<?php }?>
<?php }?>
        </div>