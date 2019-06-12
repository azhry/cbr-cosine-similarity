<?php
$id=$_GET['id_explicit'];
$sql="SELECT * FROM explicit where id_explicit='$id'";
$query=mysqli_query($dbconnect,$sql);
$data=mysqli_fetch_array($query);
?>

<div class="outter-form-login">
     <form method="post" action="?module=update_revisi_explicit" enctype="multipart/form-data">
        <input type="hidden" name="id_explicit" value="<?php echo $data['id_explicit']; ?>">

           <div class="form-group">
            <input type="text" class="form-control" name="judul" placeholder="Judul" value="<?php echo $data['judul']; ?>">
          </div>
         
          <div class="form-group">
            <textarea name="isi_explicit" class="form-control" placeholder="Isi Explicit" ><?php echo $data['isi_explicit']; ?></textarea>
          </div>
          <span>File Lama : <?php echo $data['nama_file']; ?></span>
           <div class="form-group">
            <td align="right"><b>Pilih File</b>
              <input type="file" name="file"  class="form-control"/>
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
