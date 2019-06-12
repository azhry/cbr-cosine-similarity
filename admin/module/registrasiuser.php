<?php
 
    require_once 'koneksi.php';
 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
   
    if (empty($username)) {
      header('location: ./tambah.php?error=' .base64_encode('Nama tidak boleh kosong'));
    }
    if (empty($password)) {
      header('location: ./tambah.php?error=' .base64_encode('Username tidak boleh kosong'));
    }
    if (empty($level)) {
      header('location: ./tambah.php?error=' .base64_encode('Password tidak boleh kosong'));
    }
    
   
    $sql = "INSERT INTO user (username, password, level) VALUES ('$username', '$password', '$level')";
    $insert = $dbconnect->query($sql);
    if (! $insert) {
      echo "<script>alert('".$dbconnect->error."'); window.location.href='?module=user';</script>";
    } else {
      echo "<script>alert('Insert Data Berhasil'); window.location.href='?module=user';</script>";
    }
  
 ?>
