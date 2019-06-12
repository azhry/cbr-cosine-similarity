  <?php
  $dbconnect = mysqli_connect('localhost','root','','cesar');
?>

<?php
  $judul=$_POST['judul'];
  $isi=$_POST['isi_explicit'];
  $tanggal=$_POST['tanggal'];
  $nip=$_POST['NIP'];
  $valid='belum valid';
  
  $lokasi_file=$_FILES["file"]["tmp_name"];

  $nama_file=basename($_FILES["file"]["name"]);
  
  $folder="../upload/$nama_file";

  if(move_uploaded_file($lokasi_file, "$folder"))
  {

  $query="INSERT INTO explicit(`judul`,`isi_explicit`,`nama_file`,`file`,`tanggal`,`NIP`,`validasi`) VALUES ('$judul','$isi','$nama_file','$folder','$tanggal','$nip','$valid')";
  $hasil=mysqli_query($dbconnect,$query);
  
  if (!$hasil)
  {
    die(mysqli_error($dbconnect));
  }
  echo "<script>alert('data berhasil disimpan');document.location='?module=explicit'</script>";
  }

?>