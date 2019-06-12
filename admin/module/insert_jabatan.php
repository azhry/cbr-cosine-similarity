<?php
	$jb=$_POST['jabatan'];
	
	
	$query="INSERT INTO jabatan(`jabatan`) VALUES ('$jb')";
	$hasil=mysqli_query($dbconnect,$query);
	if (!$hasil)
	{
		die(mysqli_error($dbconnect));
	}
	echo "<script>alert('Berhasil Menginput Jabatan');document.location='?module=kelola_jabatan'</script>";
?>