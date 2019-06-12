<?php
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$jabatan=$_POST['jabatan'];
$nip=$_POST['nip'];
$jk=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$level=$_POST['level'];

$jenis_gambar=$_FILES['foto']['type'];

	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
	{
	$lokasi_file=$_FILES['foto']['tmp_name'];
	$nama_file=basename($_FILES['foto']['name']);

$folder="../profil/$nama_file";

	if(move_uploaded_file($lokasi_file, "$folder"))
	{
	$query="INSERT INTO user(`username`,`password`,`nip`,`nama`,`jenis_kelamin`,`alamat`,`jabatan`,`level`,`foto`) VALUES ('$username','$password','$nip','$nama','$jk','$alamat','$jabatan','$level','$folder')";
	$hasil=mysqli_query($dbconnect,$query);
		if (!$hasil) {
		die(mysqli_error($dbconnect));
		}
	echo "<script>alert('Berhasil Membuat Akun User');document.location='?module=kelola_user'</script>";
	}	
}
else
{
	echo "<script>alert('Maaf, Foto Harus Format .jpg, .jpeg, .gif, .png');document.location='?module=kelola_user'</script>";
}

?>