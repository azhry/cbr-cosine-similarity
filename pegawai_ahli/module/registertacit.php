<?php
 
    
  $judul = $_POST['judul'];
   
    $isiknowledge = $_POST['isi_tacit'];
    $tanggal = $_POST['tanggal'];
    $NIP = $_POST['NIP'];
    $valid = 'belum valid';

   if (empty($judul)) {
      header('location: ./tambah.php?error=' .base64_encode('Username tidak boleh kosong'));
    }
   
    if (empty($isiknowledge)) {
      header('location: ./tambah.php?error=' .base64_encode('Password tidak boleh kosong'));
    }
     if (empty($tanggal)) {
      header('location: ./tambah.php?error=' .base64_encode('Username tidak boleh kosong'));
    }
     if (empty($NIP)) {
      header('location: ./tambah.php?error=' .base64_encode('Password tidak boleh kosong'));
    }
   
   
    $sql = "INSERT INTO tacit_knowledge ( judul, isi_tacit, tanggal ,NIP ,validasi) VALUES ('$judul','$isiknowledge','$tanggal','$NIP','$valid')";
    $insert = $dbconnect->query($sql);
    if (! $insert) {
      echo "<script>alert('".$dbconnect->error."'); window.location.href='?module=tacit';</script>";
    } else {
      echo "<script>alert('Insert Data Berhasil'); window.location.href='?module=tacit';</script>";
    }
  
 ?>

