<?php 
$id = $_POST['user_id'];
$lv = $_POST['level'];

$query="UPDATE user set `level`='$lv' WHERE user_id='$id'";
	$hasil=mysqli_query($dbconnect,$query);

if(!$hasil)
{
		die(mysqli_error($dbconnect));
}
	
	echo "<script>alert('Berhasil Mengubah Level Akun');document.location='?module=kelola_user'</script>";
?>