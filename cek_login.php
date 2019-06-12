<?php
session_start();

include ("koneksi.php");
date_default_timezone_set('Asia/Jakarta');

//Hasil dari yang diketikken di form login
$username = $_POST['username'];
$password = $_POST['password'];

//pengecekan username dan password
if (empty($username) && empty($password)) {
	echo "<script>alert('Username & Password Salah');document.location='index.php'</script>";

} else if (empty($username)) {
	echo "<script>alert('Username Salah');document.location='index.php'</script>";

} else if (empty($password)) {
	echo "<script>alert('Password Salah');document.location='index.php'</script>";
}

//penjabaran untuk login
$query="select * from user where username='$username' and password='$password'";
$hasil=mysqli_query($dbconnect, $query);
$has=mysqli_fetch_array($hasil);

if (mysqli_num_rows($hasil) == 1) {
	$_SESSION['user_id']		= $has['user_id'];
	$_SESSION['username']		= $has['username'];
	$_SESSION['password']		= $has['password'];
	$_SESSION['level']			= $has['level'];
	$_SESSION['nip']			= $has['nip'];
	$_SESSION['nama']			= $has['nama'];
	$_SESSION['jenis_kelamin']	= $has['jenis_kelamin'];
	$_SESSION['alamat']			= $has['alamat'];
	$_SESSION['jabatan']		= $has['jabatan'];
	$_SESSION['point']			= $has['point'];
	$_SESSION['foto']			= $has['foto'];
	
	
if ($has['level']=='admin')
{
	echo "<script>document.location='admin/index.php'</script>";
}
else if ($has['level']=='pegawai')
{
	echo "<script>document.location='pegawai/index.php'</script>";
}
else if ($has['level']=='pegawai_ahli')
{
	echo "<script>document.location='pegawai_ahli/index.php'</script>";
}	
	
	
}
	else
	{
	echo "<script>alert('Username dan Password Salah');document.location='index.php'</script>";
	}

?>