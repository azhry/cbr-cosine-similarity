<?php
	$id=$_POST['id_tacit'];
	$nip=$_POST['nip'];
	$nama=$_POST['nama'];
	$isi=$_POST['isi_komentar'];
	$tgl=$_POST['tgl_komentar'];
	
	$query="INSERT INTO komentar_tacit(`id_tacit`,`nip`,`nama`,`isi_komentar`,`tgl_komentar`) VALUES ('$id','$nip','$nama','$isi','$tgl')";
	$hasil=mysqli_query($dbconnect,$query);
	if (!$hasil)
	{
		die(mysqli_error($dbconnect));
	}
	echo "<script> window.history.go(-1) </script>";
?>