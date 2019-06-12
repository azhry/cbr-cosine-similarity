<?php
$id=$_GET['id_tacit'];
$sql="SELECT * FROM tacit_knowledge where id_tacit='$id'";
$query=mysqli_query($dbconnect,$sql);
$data=mysqli_fetch_array($query);
?>

  <div class="outter-form-login">
     <form method="post" action="?module=update_revisi_tacit">
        <input type="hidden" name="id_tacit" value="<?php echo $data['id_tacit']; ?>">
           <div class="form-group">
            <input type="text" class="form-control" name="judul" placeholder="Judul" value="<?php echo $data['judul']; ?>">
          </div>
         
          <div class="form-group">
            <textarea name="isi_tacit" class="form-control" placeholder="isi tacit"><?php echo $data['isi_tacit']; ?></textarea>
          </div>
          <input type="submit" class="btn btn-block btn-success" value="Revisi Tacit Knowledge">
          <div class="text-center forget">
            <p>Back To <a href="index.php">Home</a></p>
          </div>
        </form>
      </div>
      </div>
