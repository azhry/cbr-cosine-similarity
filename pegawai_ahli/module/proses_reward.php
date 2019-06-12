<?php

$item=$_POST['id_item'];
$user=$_POST['user_id'];
$jumlah=$_POST['jumlah'];
$status=$_POST['status'];
$waktu=$_POST['tgl_ambil'];

$query="SELECT * FROM item_reward where id_item='$item'";
$hasil=mysqli_query($dbconnect,$query);
$sql=mysqli_fetch_array($hasil);

$query1="SELECT * FROM user where user_id='$user'";
$hasil1=mysqli_query($dbconnect,$query1);
$sql1=mysqli_fetch_array($hasil1);

if($jumlah <= 0)
{
		echo "<script>alert('Maaf,Jumlah Hanya Boleh Dari Angka 1');document.location='?module=pilihreward'</script>";
}
else if($jumlah > $sql['stok'])
{
	echo "<script>alert('Maaf,Jumlah Tidak Boleh Melebihi Stok Saat Ini');document.location='?module=pilihreward'</script>";
}
else if($sql1['point'] < $sql['harga_point']*$jumlah)
{
	echo "<script>alert('Maaf,Jumlah Point Anda Tidak Mencukupi');document.location='?module=pilihreward'</script>";
}
else
{
$total=$jumlah*$sql['harga_point'];
$query="INSERT INTO reward (`id_item`,`user_id`,`jumlah`,`total`,`status`,`tgl_ambil`) VALUES ('$item','$user','$jumlah','$total','$status','$waktu')";
$hasil=mysqli_query($dbconnect,$query);
		if (!$hasil) {
		die(mysqli_error($dbconnect));
		}
	echo "<script>alert('Berhasil Mengambil Reward');document.location='?module=update_stok&id_item=$item&jumlah=$jumlah&total=$total'</script>";
}
?>