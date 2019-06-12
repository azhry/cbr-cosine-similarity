<?php
$id=$_POST['id_item'];
$item=$_POST['nama_item'];
$poin=$_POST['harga_point'];
$keterangan=$_POST['keterangan'];

$lokasi_file=$_FILES['foto']['tmp_name'];
$nama_file=basename($_FILES['foto']['name']);

$folder="../produk/$nama_file";

if($poin < 1)
{
	echo "<script>alert('Maaf, Harga Poin Tidak Boleh Kurang Dari 1');document.location='?module=atur_item_reward'</script>";
}
else
{
	if(move_uploaded_file($lokasi_file, "$folder"))
	{

		$query="UPDATE item_reward SET  nama_item='$item',harga_point='$poin',keterangan='$keterangan',foto='$folder' WHERE id_item='$id'";
		$hasil=mysqli_query($dbconnect,$query);
		if (!$hasil) {
		die(mysqli_error($dbconnect));
		}
		echo "<script>alert('Berhasil Mengedit Item');document.location='?module=atur_item_reward'</script>";
	}
	else
	{
		$query="UPDATE item_reward SET  nama_item='$item',harga_point='$poin' ,keterangan='$keterangan' WHERE id_item='$id'";
		$hasil=mysqli_query($dbconnect,$query);
		if (!$hasil) {
		die(mysqli_error($dbconnect));
		}
		echo "<script>alert('Berhasil Mengedit Item');document.location='?module=atur_item_reward'</script>";	
	}

}
?>