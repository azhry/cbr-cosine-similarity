<?php
$item=$_POST['nama_item'];
$stok=$_POST['stok'];
$poin=$_POST['harga_point'];
$keterangan=$_POST['keterangan'];

$jenis_gambar=$_FILES['foto']['type'];

if($stok < 1 )
{
	echo "<script>alert('Maaf, Stok Tidak Boleh Kurang Dari 1');document.location='?module=buat_item'</script>";
}
else if($poin < 1)
{
	echo "<script>alert('Maaf, Harga Point Tidak Boleh Kurang Dari 1');document.location='?module=buat_item'</script>";
}
else
{
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
	{
	$lokasi_file=$_FILES['foto']['tmp_name'];
	$nama_file=basename($_FILES['foto']['name']);

$folder="../produk/$nama_file";

	if(move_uploaded_file($lokasi_file, "$folder"))
	{
	$query="INSERT INTO item_reward(`nama_item`,`stok`,`harga_point`,`keterangan`,`foto`) VALUES ('$item','$stok','$poin','$keterangan','$folder')";
	$hasil=mysqli_query($dbconnect,$query);
		if (!$hasil) {
		die(mysqli_error($dbconnect));
		}
	echo "<script>alert('Berhasil Membuat Item');document.location='?module=atur_item_reward'</script>";
	}	
}
else
{
	echo "<script>alert('Maaf, Foto Harus Format .jpg, .jpeg, .gif, .png');document.location='?module=buat_item'</script>";
}
}
?>