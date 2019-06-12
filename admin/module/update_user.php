<?php
$id=$_POST['user_id'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$jabatan=$_POST['jabatan'];
$nip=$_POST['nip'];
$jk=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];

$lokasi_file=$_FILES['foto']['tmp_name'];
$nama_file=basename($_FILES['foto']['name']);

$folder="../profil/$nama_file";


	if(move_uploaded_file($lokasi_file, "$folder"))
	{

		$query="UPDATE user SET nama='$nama',username='$username',password='$password',jabatan='$jabatan',nip='$nip',jenis_kelamin='$jk',alamat='$alamat',foto='$folder' WHERE user_id='$id'";
		$hasil=mysqli_query($dbconnect,$query);
		if (!$hasil) {
		die(mysqli_error($dbconnect));
		}
		echo "<script>alert('Berhasil Mengedit User');document.location='?module=kelola_user'</script>";
	}
	else
	{
		$query="UPDATE user SET  nama='$nama',username='$username',password='$password',jabatan='$jabatan',nip='$nip',jenis_kelamin='$jk',alamat='$alamat' WHERE user_id='$id'";
		$hasil=mysqli_query($dbconnect,$query);
		if (!$hasil) {
		die(mysqli_error($dbconnect));
		}
		echo "<script>alert('Berhasil Mengedit User');document.location='?module=kelola_user'</script>";	
	}

?>