<?php
	$idk = $_GET['id_komentarexplicit'];

	$query="UPDATE komentar_explicit set `isi_komentar`='Komentar Telah Dihapus' WHERE id_komentarexplicit='$idk'";
	$hasil=mysqli_query($dbconnect,$query);

	if(!$hasil)
	{
		die(mysqli_error($dbconnect));
	}
		echo "<script> window.history.go(-1) </script>";
?>