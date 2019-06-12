<?php
	$idk = $_GET['id_komentartacit'];

	$query="UPDATE komentar_tacit set `isi_komentar`='Komentar Telah Dihapus' WHERE id_komentartacit='$idk'";
	$hasil=mysqli_query($dbconnect,$query);

	if(!$hasil)
	{
		die(mysqli_error($dbconnect));
	}
		echo "<script> window.history.go(-1) </script>";
?>