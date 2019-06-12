<?php
 
    

	$gejala       = $_POST['gejala'];
	$representasi = $_POST['representasi'];
	$status       = 'Verified';


	if (empty($gejala)) {
		header('location: ./tambah.php?error=' .base64_encode('Username tidak boleh kosong'));
	}

	if (empty($representasi)) {
		header('location: ./tambah.php?error=' .base64_encode('Password tidak boleh kosong'));
	}
     
    
   
   
	$sql = "INSERT INTO gejala(gejala, representasi, status) VALUES('$gejala', '$representasi', '$status')";
	$insert = $dbconnect->query($sql);
	if (!$insert) {
		echo "<script>alert('".$dbconnect->error."'); window.location.href='?module=gejala';</script>";
	} 
	else {
		echo "<script>alert('Insert Data Berhasil'); window.location.href='?module=gejala';</script>";
	}
  
 ?>

