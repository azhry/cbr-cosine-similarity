
<?php
 
    require_once 'koneksi.php';
    $NIP = $_POST['NIP'];
    $nama = $_POST['nama'];
    $nama = $_POST['username'];
    $jeniskelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $jabatan = $_POST['jabatan'];


    $sql = "INSERT INTO pegawai (NIP, nama,username, jenis_kelamin,alamat,jabatan) VALUES ('$NIP', '$nama','$nama', '$jeniskelamin','$alamat','$jabatan')";
    $insert = $dbconnect->query($sql);
    if (! $insert) {
      echo "<script>alert('".$dbconnect->error."'); window.location.href='?module=listpegawai';</script>";
    } else {
      echo "<script>alert('Insert Data Berhasil'); window.location.href='?module=listpegawai';</script>";
    }
  
 ?>
