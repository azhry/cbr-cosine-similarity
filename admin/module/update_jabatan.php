<?php 
$id = $_POST['id_jabatan'];
$jb = $_POST['jabatan'];

$query="UPDATE jabatan set `jabatan`='$jb' WHERE id_jabatan='$id'";
	$hasil=mysqli_query($dbconnect,$query);

if(!$hasil)
{
		die(mysqli_error($dbconnect));
}
	
	echo "<script>alert('Berhasil Mengubah Jabatan');document.location='?module=kelola_jabatan'</script>";
?>