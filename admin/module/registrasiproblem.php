<?php
 
    require_once 'koneksi.php';
  $masalah = $_POST['problem'];
    $solusi = $_POST['solusi'];
    $tanggal = $_POST['tanggal'];
   

   if (empty($masalah)) {
      header('location: ./tambah.php?error=' .base64_encode('Username tidak boleh kosong'));
    }
   
    if (empty($solusi)) {
      header('location: ./tambah.php?error=' .base64_encode('Password tidak boleh kosong'));
    }
     if (empty($tanggal)) {
      header('location: ./tambah.php?error=' .base64_encode('Username tidak boleh kosong'));
    }
    
   
   
    $sql = "INSERT INTO problem ( problem, solusi, tanggal) VALUES ('$masalah','$solusi','$tanggal')";
    $insert = $dbconnect->query($sql);
    if (! $insert) {
      echo "<script>alert('".$dbconnect->error."'); window.location.href='?module=problem';</script>";
    } else {
      echo "<script>alert('Insert Data Berhasil'); window.location.href='?module=problem';</script>";
    }
  
 ?>

