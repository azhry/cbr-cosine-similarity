<?php
  $id=$_POST['id_explicit'];
  $judul=$_POST['judul'];
  $isi=$_POST['isi_explicit'];
  
  $lokasi_file=$_FILES["file"]["tmp_name"];

  $nama_file=basename($_FILES["file"]["name"]);
  
  $folder="../upload/$nama_file";

  if(move_uploaded_file($lokasi_file, "$folder"))
  {

  $query="UPDATE explicit set `judul`='$judul',`isi_explicit`='$isi',`nama_file`='$nama_file',`file`='$folder' WHERE id_explicit='$id'";
  $hasil=mysqli_query($dbconnect,$query);
  if (!$hasil)
  {
    die(mysqli_error($dbconnect));
  }
  echo "<script>alert('Knowledge Berhasil Direvisi');document.location='?module=revise_explicit'</script>";
  
  }
  else
  {
    $query="UPDATE explicit set `judul`='$judul',`isi_explicit`='$isi' WHERE id_explicit='$id'";
  $hasil=mysqli_query($dbconnect,$query);
  if (!$hasil)
  {
    die(mysqli_error($dbconnect));
  }
  echo "<script>alert('Knowledge Berhasil Direvisi');document.location='?module=revise_explicit'</script>";
  }  

?>